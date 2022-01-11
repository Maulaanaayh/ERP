<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Indonesia_city;
use App\Models\Salesman;
use Auth;

class CityController extends Controller
{
    public function index(){
        if(auth()->user()->is_admin == true OR auth()->user()->role == 'pic'){
            return view('pages.dashboard.city', [
                'user' => User::all(),
                'pic' => Salesman::all(),
                'cities' => Indonesia_city::all(),
                'picCity' => Indonesia_city::picCIty()
            ]);
        } else {
            return redirect('/home');
        }
    }
}
