<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

use App\Models\Merchants;
use App\Models\Salesman;

class HomeController extends Controller
{
    public function index(){
        if (auth()->user()->is_admin == true){
            return view('pages.dashboard.home');
        } else {
            return view('pages.sales_dashboard.home', [
                'target' => [
                    'target' => 2500,
                    'actual' => Salesman::getMerchant()
                ],
                'merchant' => Salesman::getMerchant(TRUE)
            ]);
        }
    }   
}
