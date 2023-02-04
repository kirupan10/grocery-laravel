<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

Route::view('/sample', 'sample');

Route::get('/login', [LoginController::class, 'LoginForm']);
Route::post('loginAccess', [LoginController::class, 'loginAccess']);

Route::get('/create', [LoginController::class, 'create']);
Route::post('store', [LoginController::class, 'store']);

Route::get('/create_user', [UserController::class, 'create']);
//Route::post('store', [UserController::class, 'store']);
