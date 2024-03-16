<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;

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
Route::get('/', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'AuthLogin']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('admin/admin/customer', function () {
    return view('admin.admin.customer');
});

Route::group(['middleware' => 'admin'], function(){
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    //customer url
    Route::get('admin/customers/list',[CustomerController::class, 'list']);
    Route::get('admin/customers/add',[CustomerController::class, 'add']);
    Route::post('admin/customers/insert',[CustomerController::class, 'insert']);
});

Route::group(['middleware' => 'cashier'], function(){
Route::get('cashier/dashboard', [DashboardController::class, 'dashboard']);
});

Route::group(['middleware' => 'manager'], function(){
Route::get('manager/dashboard', [DashboardController::class, 'dashboard']);

});
