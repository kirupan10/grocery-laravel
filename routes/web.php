<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;

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
    return view('shop',['title' => '| shop']);
});

Route::get('/blogs', function () {
    return view('blogs',['title' => '| blogs']);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'| contact']);
});

Route::get('/profile', function () {
    return view('auth.profile',['title'=>'| profile']);
});

Route::get('/cart', function () {
    return view('cart',['title'=>'| cart']);
});

Route::get('/wishlist', function () {
    return view('wishlist',['title'=>'| Wishlist']);
});

Route::get('/layout', function () {
    return view('includes.layout',['title'=>'| profile']);
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

Route::get('/dress',[CategoryController::class,'dress'])->name('profile');
Route::get('/mobile',[CategoryController::class,'phones']);
Route::get('/jewels',[CategoryController::class,'jewels']);
Route::get('/shoes',[CategoryController::class,'shoes']);
Route::get('/jackets',[CategoryController::class,'jackets']);
Route::get('/accerssories',[CategoryController::class,'accerssories']);
Route::get('/bags',[CategoryController::class,'bags']);

