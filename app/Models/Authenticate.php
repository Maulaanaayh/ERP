<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Salesman;

class Authenticate extends Model
{
    use HasFactory;

    public static function insertUser(Array $data){
        User::create($data);
        $user_id = User::where('name', $data['name'])->value('id');
        return $user_id;
    }

    public static function cekRef($ref, $returnBool = true){
        $q = Salesman::where('code_referral', $ref)->first();
        if($returnBool){
            return ($q != null) ? TRUE : FALSE;
        } else {
            return $q;
        }
    }
}
