<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CoveredAreaController;
use App\Http\Controllers\Dashboard\ProductController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::resource('countries', CountryController::class);
    Route::resource('cities', CityController::class);
    Route::resource('areas', AreaController::class);
    Route::resource('coveredareas', CoveredAreaController::class)->only(['index', 'create']);

    Route::resource('products', ProductController::class);
    Route::resource('media', MediaController::class)->only('destroy');
});
Route::get('notifications', [\App\Http\Controllers\UserNotificationsController::class, 'show'])->middleware('auth');
