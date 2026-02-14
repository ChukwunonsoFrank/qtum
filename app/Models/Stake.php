<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'asset_id',
    'amount',
    'apr_rate',
    'duration',
    'profit',
    'matures_on',
    'has_matured',
  ];

  protected $casts = [
    'matures_on' => 'datetime',
    'has_matured' => 'boolean',
  ];

  public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function asset(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(Assets::class);
  }
}
