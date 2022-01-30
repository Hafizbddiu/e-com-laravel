<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return view('master');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
// Route::view('master','master');

Route::view('login','login');
Route::view('header','header');
Route::view('footer','footer');
Route::post('login',[UserController::class,'login']);
Route::get('product',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('/add_to_cart',[ProductController::class,'AddToCart']);
Route::get('CartList',[ProductController::class,'CartList']);
Route::get('removeCart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('orderPlace',[ProductController::class,'orderPlace']);
Route::get('myOrder',[ProductController::class,'myOrder']);

