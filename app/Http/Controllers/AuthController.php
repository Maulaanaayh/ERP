<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Model
use App\Models\User;
use App\Models\Authenticate;
use App\Models\Indonesia_city;
use App\Models\Salesman;


class AuthController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return redirect('/auth');
    }

    public function logout(){
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/auth');
    }

    public function registration(){
        $cities = Indonesia_city::all();
        return view('pages.auth.register', [
            'cities' => $cities
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);
        $validate['password'] = bcrypt($validate['password']);
        $user = Authenticate::insertUser($validate);
        $generated = AuthController::randomString();
        while(Authenticate::cekRef($generated)){
            $generated = AuthController::randomString();
        }
        $data = [
            'user_id' => $user,
            'no_telp' => $request->notelp,
            'city_id' => $request->city,
            'code_referral' => $generated
        ];
        Salesman::create($data);
        return redirect('/auth');
    }

    private static function randomString($length = 8){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
    }
}
