<?php

use App\Http\Controllers\BookingController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('booking', BookingController::class);
    Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
    Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/booking/{booking}', [BookingController::class, 'show'])->name('booking.show');
    Route::get('/booking/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
    Route::put('/booking/{booking}', [BookingController::class, 'update'])->name('booking.update');
    Route::delete('/booking/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');

 
});


// Admin routes
Route::get('/redirects', 'App\Http\Controllers\HomeController@index');
Route::get('/redirects/remove/{id}', 'App\Http\Controllers\HomeController@index');

Route::get('/redirects/users', 'App\Http\Controllers\HomeController@registeredUser');
Route::get('/redirects/users/remove/{id}', 'App\Http\Controllers\HomeController@registeredUser');

Route::get('/redirects/bookings', 'App\Http\Controllers\HomeController@bookingList');
Route::get('/redirects/bookings/approve/{id}', 'App\Http\Controllers\BookingController@approve');
Route::get('/redirects/bookings/decline/{id}', 'App\Http\Controllers\BookingController@decline');

Route::get('/redirects/history', 'App\Http\Controllers\HomeController@petsMedicalHistory');

 