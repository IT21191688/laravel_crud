<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\CustomerController;


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

Route::get('api/v1/customer',
[CustomerController::class,'customers'])->name('customers.customer');


Route::get('api/v1/new-customer',
[CustomerController::class,'new'])->name('customers.new');
