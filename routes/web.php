<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CardInformationController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PaymentmethodController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\VnpayController;
use App\Http\Controllers\SuccessController;

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
Route::resource('rule', RuleController::class);
Route::resource('paymentmethod', PaymentmethodController::class);
Route::resource('bank', BankController::class);
Route::get('/cardinformation', [BankController::class, 'cardInformation'])->name('pay.cardinformation');
Route::get('/vnpay', [VnpayController::class, 'index'])->name('vnpay.index');
Route::get('/success', [SuccessController::class, 'index'])->name('vnpay.index');;


