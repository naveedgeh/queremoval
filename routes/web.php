<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApiConfigurationController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ChooseVanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MapIntigrationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OtherPageController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ViewDetails;
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
//==================================================
//======================Client Route================
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
Route::get('/confrom ',[CheckoutController::class,'ConfirmStor']);
Route::get('/success ',[CheckoutController::class,'Success']);
Route::post('/confrom ',[CheckoutController::class,'ConfirmStor']);

// =====================================================================
// ==============================Admin Route========================================
Route::get('/admin',[AdminLoginController::class,'LoginUi']);
Route::post('/admin',[AdminLoginController::class,'Login']);
Route::middleware(['naveed_group'])->group(function(){
    Route::get('/admin/dashboard',[DashboardController::class,'Dashboard'])->name('dashbaord');
    Route::get('/admin/priceadd',[DashboardController::class,'Priceadd'])->name('priceadd');
    Route::get('/admin/Addpriceadd',[DashboardController::class,'AddPriceadd'])->name('addpriceadd');
    Route::get('/admin/addpriceaddfull',[DashboardController::class,'AddPriceaddFull'])->name('addpriceaddfull');
    Route::get('/admin/viewdetails',[ViewDetails::class,'Index'])->name('ViewDetails');
    Route::post('/admin/AddPriceadditional',[DashboardController::class,'AddPriceadditional'])->name('newaddpriceadd');
    Route::post('/admin/AddPriceadditional',[DashboardController::class,'AddPriceadditional'])->name('newaddpriceaddfull');
    Route::post('/admin/priceadd',[DashboardController::class,'AddPrice'])->name('AddPrice');
    Route::get('/admin/delprice/{id}',[DashboardController::class,'delPrice'])->name('delPrice');
    Route::get('/admin/deladdotionalprice/{id}',[DashboardController::class,'deladdotionalprice']);
    Route::get('/admin/Editprice/{id}',[ViewDetails::class,'EditPrice'])->name('EditPrice');
    Route::post('/admin/Updateprice',[ViewDetails::class,'UpdatePrice'])->name('UpdatePrice');
});
Route::get('/logout',[AdminLoginController::class,'Logout']);
// ================================Services Routs=================
Route::get('/homeremoval',[ServicesController::class,'HomeRemoval']);
Route::get('/office-moves',[ServicesController::class,'OfficeMoves']);
Route::get('/contact',[OtherPageController::class,'Contact']);

/**=============================Send Mail======================================= */
Route::post('/sendmail',[SendMailController::class,'Contact']);