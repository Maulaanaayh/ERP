<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indonesia_city extends Model
{
    use HasFactory;

    // Model
    protected $fillable = [
        'id',
        'province_id',
        'name',
        'target',
        'meta',
    ];

    // Relationship
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function salesman(){
        return $this->hasMany(Salesman::class);
    }

    public function province(){
        return $this->belongsTo(Indonesia_province::class, 'province_id');
    }

    // Method
    public static function picCIty(){
        $user_id = auth()->user()->id;
        $id = Salesman::where('user_id', $user_id)->value('city_id');
        $q = Indonesia_city::where('id', $id)->get();
        return $q;
    }
}
