<?php

use Illuminate\Support\Facades\Auth;
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
*/

Route::get('/', function () {
    return view('welcome');
});
//for auth user
Route::view('/homepage', 'users.homepage')->name('homepage');
//for guest
Route::view('/userhome', 'welcome')->name('userhome');
Route::view('/products', 'products.index')->name('products');
Route::view('/product', 'products.show')->name('showproduct');
Route::view('/terms&conditions', 'terms&conditions')->name('terms&conditions');
Route::view('/categories', 'categories')->name('categories');

Auth::routes();
//for admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
