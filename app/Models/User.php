<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Laravel\Sanctum\HasApiTokens;
use Lab404\Impersonate\Models\Impersonate;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable, Impersonate, HasRoleAndPermission;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'phone_number',
    'country',
    'unhashed_password',
    'remember_token',
    'proof_document_type',
    'proof_document_path',
    'profile_picture',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public $asset;



  public function transactions()
  {
    return $this->hasMany('App\Models\Transactions');
  }

  public function assets()
  {
    return $this->hasMany('App\Models\UserAssets');
  }

  public function firstAsset()
  {
    return $this->hasOne('App\Models\UserAssets');
  }

  public function getFields()
  {
    $not_allowed = ['remember_token', 'email_verified_at', 'password', 'plan', 'exchange_account', 'account_type', 'insurance_package'];
    return array_diff($this->fillable, $not_allowed);
  }
}
