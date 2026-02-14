<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    public const  DEPOSIT = 1;
    public const TRANSFER = 2;
    public const PENDING = 2;
    public const SUCCESS = 1;
    public const FAILED = 3;

    protected $fillable = [
        'asset_id',
        'user_id',
        'amount',
        'description',
        'status',
        'type'
    ];





    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function asset(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\Assets','asset_id');
    }

    public function type_explained($type): string
    {
        if($type==self::DEPOSIT){
            return 'Deposit';
        }
        elseif($type==self::TRANSFER){
            return 'Transfer';
        }

        return 'NULL';
    }

    public function status_explained($status): string
    {
        switch ($status){
            case self::SUCCESS:
                return 'Success';
            case self::PENDING:
                return 'PENDING';
            case self::FAILED:
                return 'Failed';
            default:
                return 'Unknown';
        }
    }

    public function getFields(){
        return ['amount'];
    }

}
