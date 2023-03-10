<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    //forget() means erase the data
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/register",[UserController::class,'register']);
Route::post("/login_submit",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("/add_to_cart",[ProductController::class,'AddToCart']);
Route::get("/cartlist",[ProductController::class,'cartlist']);
Route::get("/removecart/{id}",[ProductController::class,'removecart']);
Route::get("/ordernow",[ProductController::class,'ordernow']);
Route::post("/orderPlace",[ProductController::class,'orderPlace']);
Route::get("/myorders",[ProductController::class,'myorders']);




