<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');
Route::view('/menus', 'menus');
Route::view('/login', 'login');
Route::view('/cart', 'cart');
Route::view('/register', 'register');
Route::view('/homeDriver', 'driver.homeDriver');  