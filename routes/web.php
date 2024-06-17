<?php

use App\Http\Controllers\MovieController;
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
//     return view('Home');
// });
Route::resource('movie', MovieController::class);
Route::resource('/', MovieController::class);
Route::get('/showtime', function () {
    return view('ticketLayouts.showtime');
})->name('showtime');

Route::get('/seat', function () {
    return view('ticketLayouts.seatOrder');
})->name('seat');

Route::get('/food', function () {
    return view('ticketLayouts.food');
})->name('food');

