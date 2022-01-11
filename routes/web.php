<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\MerchantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

// Authentication
Route::get('/auth', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::get('/auth/register', [AuthController::class, 'registration'])->middleware('guest');
Route::post('/auth/register', [AuthController::class, 'store']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

// City
Route::get('/home/city', [CityController::class, 'index'])->middleware('auth');

// Marketing
Route::resource('/home/marketing', MarketingController::class)->middleware('auth');

// Merchant
Route::get('/home/merchant', [MerchantController::class, 'index'])->middleware('auth');


