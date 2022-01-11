<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Merchant;

class MerchantController extends Controller
{
    public function index(){
        return view('pages.dashboard.merchant', [
            'merchant' => Merchant::all(),
            'count_merchant' => [
                'IRG' => Merchant::count_merchant('IRG'),
                'MOOPO' => Merchant::count_merchant('MOOPO'),
                'KAMSIA' => Merchant::count_merchant('KAMSIA')
            ]
        ]);
    }
}
