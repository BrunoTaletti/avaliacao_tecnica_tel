<?php

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

Route::group(['middleware' => 'web'], function () 
{
    Route::get('/', function ()
    {
        return view('welcome');
    });
    
    Auth::routes();
    
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});

Route::get('/customers',[App\Http\Controllers\CustomersController::class, 'list_customers'])->name('customers.list');
Route::get('/customers/new',[App\Http\Controllers\CustomersController::class, 'new_customer'])->name('customers.new');