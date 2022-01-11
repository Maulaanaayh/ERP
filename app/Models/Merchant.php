<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Salesman;

class Merchant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    const UPDATED_AT = null;

    public static function get(){
        if(auth()->user()->is_admin == true){
            return Merchant::all();
        } 
        else if(auth()->user()->role == 'pic') {
            $salesman_id = Salesman::where('user_id', auth()->user()->id)->value('id');
            return Merchant::where('salesman_id', $salesman_id);
        } else {
            return Merchant::all();
        }
    }

    public static function count_merchant($type){
        return Merchant::where('merchant_type', $type)->count();
    }
}
