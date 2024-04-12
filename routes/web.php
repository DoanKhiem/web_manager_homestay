<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\Controller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // category
    Route::resource('category', \App\Http\Controllers\Category::class);

    // booking
    Route::resource('booking', \App\Http\Controllers\Booking::class);
    Route::get('booking/menu/{id}', [\App\Http\Controllers\Booking::class, 'addMenu'])->name('booking.menu');
    Route::post('booking/menu/store', [\App\Http\Controllers\Booking::class, 'createMenu'])->name('booking.menu.store');

    // menu
    Route::resource('menu', \App\Http\Controllers\Menu::class);

    // room
    Route::resource('room', \App\Http\Controllers\Room::class);

    // utility
    Route::resource('utility', \App\Http\Controllers\Utility::class);
});

require __DIR__.'/auth.php';
