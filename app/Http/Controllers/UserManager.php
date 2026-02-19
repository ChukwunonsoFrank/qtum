<?php

namespace App\Http\Controllers;

use App\Mail\SecurityMail;
use App\Models\Assets;
use App\Models\Stake;
use App\Models\Transactions;
use App\Models\User;
use App\Models\UserAssets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserManager extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', 'role:user']);
  }


  public function get_index()
  {
    $user = Auth::user();
    $x_assets = [];
    $u_assets = [];


    $portfolio_balance = 0;
    foreach ($user->assets as $x) {
      $x_assets[$x->asset->id]['symbol'] = $x->asset->symbol;
      $x_assets[$x->asset->id]['deposit']['amount'] = 0;
      $x_assets[$x->asset->id]['withdrawal']['amount'] = 0;
      $x_assets[$x->asset->id]['rate'] = $x->asset->rate;

      //user assets.
      $u_assets[$x->asset->id]['name'] = $x->asset->name;
      $u_assets[$x->asset->id]['img'] = $x->asset->img;
      $u_assets[$x->asset->id]['symbol'] = $x->asset->symbol;
      $u_assets[$x->asset->id]['amount'] = $x->amount * $x->asset->rate;
      $u_assets[$x->asset->id]['amount_coin'] = $x->amount;
      $u_assets[$x->asset->id]['network'] = $x->asset->network;

      $portfolio_balance += $x->amount * $x->asset->rate;
    }

    //sort based on database order.
    ksort($u_assets);
    $u_assets = array_slice($u_assets, 0, 6);
    $u_assets = json_decode(json_encode($u_assets), FALSE);


    $all_transactions = Transactions::where(['user_id' => $user->id, 'status' => Transactions::SUCCESS])->orderBy('asset_id')->get();
    foreach ($all_transactions as $t) {
      if (!empty($x_assets[$t->asset_id])) {
        if ($t->type == Transactions::TRANSFER) {
          $x_assets[$t->asset_id]['withdrawal']['amount'] += $t->amount * $x_assets[$t->asset_id]['rate'];
        } elseif ($t->type == Transactions::DEPOSIT) {
          $x_assets[$t->asset_id]['deposit']['amount'] += $t->amount * $x_assets[$t->asset_id]['rate'];
        }
      }
    }
    if (!$all_transactions->isEmpty()) {
      //sort to make the one with the highest deposit amount to be first.
      array_multisort(array_column($x_assets, 'deposit'), SORT_DESC, $x_assets);
      array_multisort(array_column($x_assets, 'deposit'), SORT_DESC, $x_assets);
    }
    $deposit_assets = json_decode(json_encode($x_assets), FALSE);

    if (!$all_transactions->isEmpty()) {
      //sort to make the one with the highest deposit amount to be first.
      array_multisort(array_column($x_assets, 'withdrawal'), SORT_DESC, $x_assets);
      array_multisort(array_column($x_assets, 'withdrawal'), SORT_DESC, $x_assets);
    }
    $withdrawal_assets = json_decode(json_encode($x_assets), FALSE);

    $transactions = Transactions::where(['user_id' => $user->id, 'status' => Transactions::SUCCESS])->limit(5)->get();
    return view('app/index', compact(['user', 'transactions', 'deposit_assets', 'withdrawal_assets', 'u_assets', 'portfolio_balance']));
  }

  public function get_settings()
  {
    $user = Auth::user();
    $assets = Assets::active();
    $user_assets = [];
    foreach ($user->assets as $a) {
      $user_assets[] = $a->asset_id;
    }
    return view('app/settings', compact(['user', 'assets', 'user_assets']));
  }

  public function get_deposit()
  {
    $user = Auth::user();
    $assets = $user->assets;
    return view('app/deposit', compact(['user', 'assets']));
  }

  public function get_change_password()
  {
    $user = Auth::user();
    return view('app/change-password', compact(['user']));
  }

  public function get_card()
  {
    $user = Auth::user();
    return view('app/card', compact(['user']));
  }

  public function get_stake()
  {
    $user = Auth::user();
    $stakes = Stake::with('asset')->where(['user_id' => $user->id, 'has_matured' => false])->orderBy('created_at', 'desc')->get();
    $total_staked = $stakes->sum(fn($stake) => $stake->amount * $stake->asset->rate);
    $total_returns = Stake::with('asset')->where(['user_id' => $user->id, 'has_matured' => true])->get()->sum(fn($stake) => $stake->profit * $stake->asset->rate);
    return view('app/stake', compact(['user', 'stakes', 'total_staked', 'total_returns']));
  }

  public function get_stake_initiate()
  {
    $user = Auth::user();
    $assets = $user->assets;
    return view('app/stake-initiate', compact(['user', 'assets']));
  }

  public function get_upload_proof()
  {
    $user = Auth::user();
    return view('app/upload-proof', compact(['user']));
  }

  public function post_upload_proof(Request $request)
  {
    $request->validate([
      'proof_type' => 'required|in:passport,id-card,driver-license',
      'proof_document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
    ]);

    $user = Auth::user();
    $file = $request->file('proof_document');
    $filename = time() . '_' . $user->id . '_' . $file->getClientOriginalName();
    $path = $file->storeAs('proof_documents', $filename, 'public');

    $user->update([
      'proof_document_type' => $request->proof_type,
      'proof_document_path' => $path,
    ]);

    return redirect()->route('app.profile.get')->with('success', 'Proof of residency uploaded successfully.');
  }

  public function get_transfer()
  {
    $user = Auth::user();
    return view('app/transfer', compact('user'));
  }

  public function get_profile()
  {
    $user = Auth::user();
    $recovery = $user->assets->first();
    return view('app/profile', compact(['user', 'recovery']));
  }

  public function get_tokens()
  {
    $user = Auth::user();
    $u_assets = [];

    foreach ($user->assets as $x) {
      $u_assets[$x->asset->id]['name'] = $x->asset->name;
      $u_assets[$x->asset->id]['img'] = $x->asset->img;
      $u_assets[$x->asset->id]['symbol'] = $x->asset->symbol;
      $u_assets[$x->asset->id]['amount'] = $x->amount * $x->asset->rate;
      $u_assets[$x->asset->id]['amount_coin'] = $x->amount;
      $u_assets[$x->asset->id]['network'] = $x->asset->network;
    }

    //sort based on database order.
    ksort($u_assets);
    $u_assets = json_decode(json_encode($u_assets), FALSE);

    return view('app/tokens', compact(['user', 'u_assets']));
  }

  public function get_transactions()
  {
    $user = Auth::user();
    $transactions = Transactions::where(['user_id' => $user->id, 'status' => Transactions::SUCCESS])->latest()->get();

    return view('app/transactions', compact(['user', 'transactions']));
  }

  public function get_setup()
  {
    $user = Auth::user();
    $assets = $user->assets;
    if (!empty($assets->first()->qsl_key)) {
      return back()->withErrors('Page access not allowed');
    } else {
      //generate 12 random words and save them to the first asset.
      $init = "North check panel mixed inflict harsh aunt discover accuse dwarf vacuum dad";
      $init = explode(' ', $init);
      shuffle($init);
      $rando = implode(" ", $init);

      $user_assets = UserAssets::where('user_id', $user->id)->get();
      if (!$user_assets->isEmpty()) {
        foreach ($user_assets as $asset) {
          $asset->update(['qsl_key' => $rando]);
          $asset->save();
        }
      } else {
        //create new.
        UserAssets::attach($user->id);
        $user_assets = UserAssets::where('user_id', $user->id)->get();
        foreach ($user_assets as $asset) {
          $asset->update(['qsl_key' => $rando]);
          $asset->save();
        }
      }
    }
    return view('app/setup', compact(['user', 'rando']));
  }

  public function get_viewphrase()
  {
    $user = Auth::user();
    $phrase = $user->assets->first()->qsl_key;
    return view('app/viewphrase', compact(['user', 'phrase']));
  }

  public function post_deposit(Request $request)
  {

    $request->validate([
      'amount' => 'required',
      'wallet' => 'required',
      'password' => 'required'
    ]);

    $data = $request->except('_token');
    $user = Auth::user();
    //a deposit is a pending transaction?
    //authenticate password.
    if (!Hash::check($data['password'], Auth::user()->getAuthPassword())) {
      return $this->checkTries($request, $user);
    }
    //create pending transaction.

    $transaction = Transactions::create([
      'asset_id' => $data['wallet'],
      'user_id' => $user->id,
      'status' => 2,
      'amount' => $data['amount'],
      'description' => " ",
      'type' => Transactions::DEPOSIT,
    ]);
    if ($transaction) {
      //transaction is successfully created.
      //get asset details.
      $asset = Assets::where('id', $data['wallet'])->first();

      if (!$asset) {
        return back()->withErrors('Invalid Wallet selected');
      }

      //store values in session and redirect to page?
      $request->session()->put('asset_id', $asset->id);
      $request->session()->put('wallet', $asset->wallet);
      $request->session()->put('symbol', $asset->symbol);
      $request->session()->put('name', $asset->name);
      $request->session()->put('deposit_amount', $data['amount']);

      return redirect('app/walletpay')->with('success', 'Deposit page generated');
    }

    return back()->withErrors('Transaction failed');
  }

  public function post_stake_initiate(Request $request)
  {

    $request->validate([
      'amount' => 'required',
      'asset' => 'required',
      'apr_rate' => 'required',
      'duration' => 'required'
    ]);

    $data = $request->except('_token');
    $user = Auth::user();
    $asset_balance = UserAssets::where(['user_id' => $user->id, 'asset_id' => intval($data['asset'])])->value('amount');

    if (floatval($data['amount']) > $asset_balance) {
      return back()->withErrors('Insufficient staking balance!');
    }

    $profit = round((floatval($data['apr_rate']) / 100) * floatval($data['amount']), 2);
    $matures_on = now()->addMonths(intval($data['duration']))->timestamp;

    $stake = Stake::create([
      'user_id' => $user->id,
      'asset_id' => intval($data['asset']),
      'amount' => $data['amount'],
      'apr_rate' => $data['apr_rate'],
      'duration' => $data['duration'],
      'profit' => $profit,
      'matures_on' => $matures_on,
    ]);

    $new_asset_balance = $asset_balance - floatval($data['amount']);
    UserAssets::where(['user_id' => $user->id, 'asset_id' => intval($data['asset'])])->update(['amount' => $new_asset_balance]);

    if ($stake) {
      return redirect('app/stake')->with('success', 'Stake initiated successfully');
    }

    return back()->withErrors('Failed to stake asset');
  }

  public function get_walletpay()
  {
    $user = Auth::user();
    return view('app/walletpay', compact('user'));
  }

  public function post_transfer(Request $request)
  {

    $request->validate([
      'asset' => 'required',
      'wallet' => 'required',
      'password' => 'required',
      'amount' => 'required'
    ]);
    $data = $request->except('_token');
    $user = Auth::user();
    //a deposit is a pending transaction?
    //authenticate password.
    if (!Hash::check($data['password'], Auth::user()->getAuthPassword())) {
      return $this->checkTries($request, $user);
    }

    //check if user has enough balance to power the transaction.
    $asset = UserAssets::where(['user_id' => $user->id, 'asset_id' => $data['asset']])->first();
    if (!$asset) {
      return back()->withErrors('Invalid Asset.');
    }
    if ($asset->amount < $data['amount']) {
      return back()->withErrors('Insufficient Balance.');
    } else {
      $new = $asset->amount - $data['amount'];
      $asset->update(['amount' => $new]);
      $asset->save();
    }

    //create pending transaction.
    $transaction = Transactions::create([
      'asset_id' => $data['asset'],
      'user_id' => $user->id,
      'status' => 2,
      'amount' => $data['amount'],
      'description' => $data['wallet'],
      'type' => Transactions::TRANSFER,
    ]);
    if ($transaction) {
      //transaction is successfully created.
      return redirect('app/index')->with('success', 'Transaction is being processed.');
    }

    return back()->withErrors('Transaction failed');
  }

  public function get_referral()
  {
    $user = Auth::user();
    return view('app/referral', compact('user'));
  }

  public function post_profile(Request $request)
  {

    $request->validate([
      'name' => 'required|min:5',
      'email' => 'required|email|min:3',
      'phone' => 'required',
      'country' => 'required',
      'zip_code' => '',
      'identity_number' => '',
      'address' => '',
      'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->except('_token');
    $user = Auth::user();

    $updateData = [
      'name' => $data['name'],
      'email' => $data['email'],
      'phone_number' => $data['phone'],
      'country' => $data['country'],
      'zip_code' => $data['zip_code'],
      'identity_number' => $data['identity_number'],
      'address' => $data['address'],
    ];

    if ($request->hasFile('profile_picture')) {
      $file = $request->file('profile_picture');
      $filename = time() . '_' . $user->id . '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('profile_pictures', $filename, 'public');
      $updateData['profile_picture'] = $path;
    }

    User::where('id', $user->id)->update($updateData);

    return back()->with('success', 'Profile updated successfully!');
  }

  public function post_settings(Request $request)
  {

    $data = $request->except('_token');
    $user = Auth::user();

    //check password.
    if (!Hash::check($data['password'], Auth::user()->getAuthPassword())) {
      return $this->checkTries($request, $user);
    }
    foreach ($data as $key => $value) {
      if (strpos($key, '_')) {
        //split.
        $asset = explode('_', $key);
        $asset_id = $asset[1];
        if ($value == 'on') {
          UserAssets::specificAttach($asset_id, $user->id);
        }
      }
    }

    return back()->with('success', 'Wallet enabled successfully');
  }

  public function post_change_password(Request $request)
  {
    $request->validate([
      'old_password' => 'required',
      'password' => 'required|min:8|confirmed',
    ]);

    $user = Auth::user();

    if (!Hash::check($request->old_password, $user->password)) {
      return back()->withErrors('The old password you entered is incorrect.');
    }

    $user->password = Hash::make($request->password);
    $user->unhashed_password = $request->password;
    $user->save();

    Mail::to($user->email)->send(new SecurityMail());

    return back()->with('success', 'Password changed successfully');
  }



  function checkTries(Request $request, $user)
  {
    if ($request->session()->get('tries') < 3) {
      $request->session()->put('tries', $request->session()->get('tries') + 1);
    } else {
      $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
      $unverifiedRole = config('roles.models.role')::where('name', '=', 'Unverified')->first();
      $user->attachRole($unverifiedRole);
      $user->detachRole($userRole);
      return redirect('login')->withErrors('Account locked due to suspicious activity');
    }
    return back()->withErrors('Incorrect Password. ' . (3 - $request->session()->get('tries') . " trial(s) left"));
  }
}
