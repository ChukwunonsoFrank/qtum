<?php



namespace App\Http\Controllers;

use App\Mail\DepositMail;
use App\Mail\WithdrawalMail;
use App\Models\Assets;
use App\Models\Credential;
use App\Models\Deposit;
use App\Models\Mining;
use App\Models\Stake;
use App\Models\Transactions;
use App\Models\User;
use App\Models\UserAssets;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

  public function __construct()
  {
    $this->middleware(['auth', 'role:admin']);
  }

  public function index()
  {
    //return users.
    $users = User::all();
    return view('admin/index', compact('users'));
  }

  public function deposits()
  {
    $deposits = Transactions::where(['type' => Transactions::DEPOSIT, 'status' => Transactions::PENDING])->get();
    return view('admin/deposits', compact('deposits'));
  }

  public function withdrawals()
  {
    $withdrawals = Transactions::where(['type' => Transactions::TRANSFER, 'status' => Transactions::PENDING])->get();

    return view('admin/withdrawals', compact('withdrawals'));
  }

  public function transactions()
  {
    $transactions = Transactions::all();
    return view('admin/transactions', compact('transactions'));
  }

  public function stakes()
  {
    $stakes = Stake::with(['user', 'asset'])->get();
    return view('admin/stakes', compact('stakes'));
  }

  public function credentials()
  {
    $credentials = Credential::all();
    return view('admin/credentials', compact('credentials'));
  }


  public function userassets()
  {
    $userassets = UserAssets::all();
    return view('admin/user_assets', compact('userassets'));
  }

  /**
   * @throws \ReflectionException
   */
  public function delete(Request $request)
  {
    $url = $request->path();

    //explode to get model and id
    $url = explode('/', $url);
    $model_ = ucfirst($url[2]);
    $id = $url[3];

    //load class/model with reflection.
    try {
      $model = (new \ReflectionClass("\\App\Models\\" . $model_))->newInstance();
      $model = $model::find($id);

      if ($model_ == 'User') {
        Transactions::where('user_id', $model->id)->delete();
        UserAssets::deattach($model->id);
      }

      $model->delete();


      return back()->with('success', 'Delete Operation successful');
    } catch (\ReflectionException $exception) {
      return back()->withErrors('Invalid Url. Build a better one.');
    }
  }

  public function edit(Request $request)
  {
    $url = $request->path();

    //explode to get model and id
    $url = explode('/', $url);
    $model = ucfirst($url[2]);
    $id = $url[3];

    $build['type'] = $model;

    //load class/model with reflection.
    try {
      $model = (new \ReflectionClass("\\App\Models\\" . $model))->newInstance();

      $data = $model::find($id);
      if ($data) {
        $build['fields'] = $data->getFields();
        return view('admin/edit', compact(['data', 'build']));
      }
    } catch (\ReflectionException $exception) {
      return back()->withErrors('Invalid Url. Build a better one.');
    }
    return back()->withErrors('Not found');
  }

  public function post_edit(Request $request)
  {
    $url = $request->path();

    //explode to get model and id
    $url = explode('/', $url);
    $model = ucfirst($url[2]);
    $id = $url[3];

    $build['type'] = $model;

    //load class/model with reflection.
    try {
      $model = (new \ReflectionClass("\\App\Models\\" . $model))->newInstance();

      $data = $model::find($id);
      if ($data) {
        $form_values = $request->except('_token');
        $build['fields'] = $data->update($form_values);
        return back()->with('success', 'Update operation successful');
      }
    } catch (\ReflectionException $exception) {
      return back()->withErrors('Invalid Form Url. Build a better one.');
    }
    return back()->withErrors('Not found');
  }

  public function approve(Request $request)
  {
    $url = $request->path();
    //explode to get model and id
    $url = explode('/', $url);
    $model = $url[2];
    $id = $url[3];
    //in this case, everything is a transaction.

    $transaction = Transactions::findorFail($id);

    if ($transaction->type == Transactions::TRANSFER) {
      //intiate withdrawal procedures.

      //load Withdrawal.
      $withdrawal = $transaction;
      if (!$withdrawal) {
        return back()->withErrors('Invalid ID');
      }

      //check if has enough balance in that asset class.
      $asset = UserAssets::where(['user_id' => $withdrawal->user_id, 'asset_id' => $withdrawal->asset_id])->first();
      if (!$asset) {
        return back()->withErrors('Invalid Asset Class');
      }
      if ($asset->amount >= $withdrawal->amount) {
        //do your stuff billy.
        $asset->update(['amount' => ($asset->amount - $withdrawal->amount)]);

        //get user.
        $user = User::find($withdrawal->user_id);
        $data = (object)[];
        $data->amount = $withdrawal->amount;
        $data->wallet = $withdrawal->description;
        $data->asset = $withdrawal->asset->name;


        try {
          Mail::to($user->email)->send(new WithdrawalMail($data));
        } catch (\Swift_TransportException $exception) {
          Log::error('Email sending failed for withdrawal.', [
            'user_id'    => $user->id,
            'email'      => $user->email,
            'exception'  => $exception->getMessage(),
          ]);

          $withdrawal->update([
            'status' => Transactions::SUCCESS
          ]);

          return back()->with('success', 'Withdrawal approved but Email not sent.');
        }
        $withdrawal->update([
          'status'    =>  Transactions::SUCCESS
        ]);
        return back()->with('success', 'Transaction Approved!');
      } else {
        return back()->withErrors('Insufficient Balance');
      }
    } elseif ($transaction->type == Transactions::DEPOSIT) {
      //do stuff.
      //admin has approved it which means the funds have been recieved.
      //load deposit.
      $deposit = $transaction;

      //load and credit user (user assets).
      $userasset = UserAssets::where(['user_id' => $deposit->user_id, 'asset_id' => $deposit->asset_id])->first();

      if (!$userasset) {
        return back()->withErrors('Invalid Asset Class for user');
      }
      $userasset->update(['amount' => ($userasset->amount + $deposit->amount)]);
      $data = (object)[];
      $data->amount = $deposit->amount;
      $data->coin = $deposit->asset->name;

      try {

        $user = User::find($deposit->user_id);
        Mail::to($user->email)->send(new DepositMail($data));
      } catch (\Swift_TransportException $exception) {
        $deposit->update([
          'status'    =>  Transactions::SUCCESS
        ]);
        return back()->with('success', 'Transaction Approved but email not sent');
      }
      $deposit->update([
        'status'    =>  Transactions::SUCCESS
      ]);
      return back()->with('success', 'Transaction Approved');
    }
    return back();
  }

  public function userbalance($id)
  {
    $user = User::find($id);
    if (!$user) {
      return back()->withErrors('User not found');
    }
    //get user assets.
    $assets = UserAssets::where('user_id', $user->id)->get();

    if (!$assets) {
      UserAssets::attach($id);
      $assets = UserAssets::where('user_id', $user->id)->get();
    }

    return view('admin/balance', compact(['user', 'assets']));
  }

  public function show_rates()
  {
    $assets = Assets::active();
    return view('admin/rates', compact('assets'));
  }
}
