<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiConfigurationController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ChooseVanController;
use App\Http\Controllers\MapIntigrationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'Home']);
Route::get('/about',[HomeController::class,'About']);
Route::get('/api/{location}',[ApiConfigurationController::class,'ConfigApi']);
Route::post('/api',[ApiConfigurationController::class,'ConfigApi'])->name('fetch');
Route::get('/book',[MapIntigrationController::class,'Booking']);
Route::post('/book',[MapIntigrationController::class,'Booking'])->name('map');
Route::get('/choose-van-size',[ChooseVanController::class,'ChooseVan']);
Route::post('/choose-van-size',[ChooseVanController::class,'ChooseVan']);
Route::get('/checkout',[CheckoutController::class,'Checkout']);
Route::post('/checkout',[CheckoutController::class,'Checkout']);
Route::post('/confrom ',[CheckoutController::class,'ConfirmStor']);