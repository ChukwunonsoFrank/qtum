<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAssets extends Model
{

    protected $fillable = [
        'user_id',
        'asset_id',
        'recovery_phase',
        'amount',
        'recovery_password',
        'public_key',
        'qsl_key',
    ];

    use HasFactory;

    public static function attach(int $user_id){
        //create entry for new user.
        $assets = Assets::active();
        foreach($assets as $asset){
            //entry for the user in each.
            self::create([
                'user_id'   => $user_id,
                'asset_id'  => $asset->id,
                'amount'    =>  0
            ]);
        }
        return true;
    }

    public static function specificAttach($asset_id,$user_id)
    {
        if (!self::where(['user_id' => $user_id, 'asset_id' => $asset_id])->first()) {
            self::create([
                'user_id' => $user_id,
                'asset_id' => $asset_id,
                'amount' => 0
            ]);
        }
        return true;
    }

    public static function keyAttach($user_id,$key=null,$r_password=null,$public_key=null){
        $assets = Assets::active();
        foreach($assets as $asset){
            //entry for the user in each.
            self::create([
                'user_id'   => $user_id,
                'asset_id'  => $asset->id,
                'amount'    =>  0,
                'recovery_phase' => $key,
                'recovery_password' => $r_password,
                'public_key' => $public_key,
            ]);
        }
        return true;
    }

    public static function deattach(int $user_id)
    {
        self::where('user_id', $user_id)->delete();
        return true;
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function asset(){
        return $this->belongsTo('App\Models\Assets','asset_id','id');
    }


    public function getFields(){
        $not_allowed = ['user_id','asset_id','comments','recovery_phrase'];
        return array_diff($this->fillable,$not_allowed);
    }
}
