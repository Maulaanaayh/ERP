<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function getMerchant($getNumrows = false){
        $q = Merchant::all();
        return ($getNumrows) ? $q : $q->count();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(Indonesia_city::class, 'city_id');
    }
}
