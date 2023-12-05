<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
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
    return view('welcome-lava');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('studio', function () {
    return view('studio');
});
//Route::get('schedule', function () {
//    return view('schedule');
//});
Route::get('recital', function () {
    return view('recital');
});
Route::get('classes', function () {
    return view('classes');
});
Route::get('news', function () {
    return view('news');
});

Route::get('/news/2023-jan', function () {
    return view('/news/2023-jan');
});
Route::get('/news/2023-feb', function () {
    return view('/news/2023-feb');
});
Route::get('/news/2023-mar', function () {
    return view('/news/2023-mar');
});
Route::get('/news/2023-apr', function () {
    return view('/news/2023-apr');
});
Route::get('/news/2023-may', function () {
    return view('/news/2023-may');
});
Route::get('/news/2023-sep', function () {
    return view('/news/2023-sep');
});
Route::get('/news/2023-oct', function () {
    return view('/news/2023-oct');
});
Route::get('/news/2023-nov', function () {
    return view('/news/2023-nov');
});
Route::get('/news/2023-dec', function () {
    return view('/news/2023-dec');
});

//Route::get('/calendar', 'App\Http\Controllers\EventController@index');
//Route::post('/calendar', 'App\Http\Controllers\EventController@store');

Route::resource('events', EventController::class);
Route::patch('/events/order', 'EventController@updateOrder');

//Route::resource('articles', ArticleController::class);
Route::resource('promos', PromoController::class);



Route::get('/dashboard', function () {
    return view('welcome-lava');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
