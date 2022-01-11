<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indonesia_province extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function city(){
        return $this->hasMany(Indonesia_city::class);
    }
}
