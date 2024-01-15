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

Route::get('/news/{year}-{month}', function ($year, $month) {
    return view("/news/$year-$month");
})->name('news.year-month');


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
