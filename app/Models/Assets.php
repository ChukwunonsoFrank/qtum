<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;

    protected $fillable = ['symbol','rate'];

    public static function active(){
        return self::where('status',1)->get();
    }



    public function getFields(): array
    {
        $not_allowed = ['remember_token','email_verified_at'];
        return array_diff($this->fillable,$not_allowed);
    }
}
