<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/shop', function () {
    return view('shop');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});
/*
Route::view('/sample', 'sample');

Route::get('/login', [LoginController::class, 'LoginForm']);
Route::post('loginAccess', [LoginController::class, 'loginAccess']);

Route::get('/create', [LoginController::class, 'create']);
Route::post('store', [LoginController::class, 'store']);

Route::get('/create_user', [UserController::class, 'create']);
//Route::post('store', [UserController::class, 'store']);
*/
Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
Route::view('home','home')->middleware('auth');

Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);
