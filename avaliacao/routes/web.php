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
        return Redirect::to('/login');
    });

    Auth::routes();

    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/customers',[App\Http\Controllers\CustomersController::class, 'list'])->name('customers.list')->middleware('auth');
Route::get('/customers/new',[App\Http\Controllers\CustomersController::class, 'new'])->name('customers.form')->middleware('auth');
Route::get('/customers/{id}/edit',[App\Http\Controllers\CustomersController::class, 'edit'])->name('customers.form')->middleware('auth');

Route::post('/customers/add',[App\Http\Controllers\CustomersController::class, 'add'])->name('customers.add')->middleware('auth');
Route::post('/customers/update/{id}',[App\Http\Controllers\CustomersController::class, 'update'])->name('customers.update')->middleware('auth');
Route::delete('/customers/delete/{id}',[App\Http\Controllers\CustomersController::class, 'delete'])->name('customers.delete')->middleware('auth');

Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.form')->middleware('auth');
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class, 'delete'])->name('users.delete')->middleware('auth');
