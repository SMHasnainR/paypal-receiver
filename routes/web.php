<?php

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

use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('pay',[PaymentController::class,'pay'])->name('submit-payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);
