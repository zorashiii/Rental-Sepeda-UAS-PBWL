<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route User
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);

//Route Customer
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/customer', [App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
Route::patch('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'destroy']);

//Route bicycle
Route::get('/bicycle', [App\Http\Controllers\BicycleController::class, 'index']);
Route::get('/bicycle/create', [App\Http\Controllers\BicycleController::class, 'create']);
Route::post('/bicycle', [App\Http\Controllers\BicycleController::class, 'store']);
Route::get('/bicycle/edit/{id}', [App\Http\Controllers\BicycleController::class, 'edit']);
Route::patch('/bicycle/{id}', [App\Http\Controllers\BicycleController::class, 'update']);
Route::delete('/bicycle/{id}', [App\Http\Controllers\BicycleController::class, 'destroy']);

//Route Rental
Route::get('/rental', [App\Http\Controllers\RentalController::class, 'index'])->name('rental');
Route::get('/rental/create', [App\Http\Controllers\RentalController::class, 'create'])->name('rental_create');
Route::post('rental/store', [App\Http\Controllers\RentalController::class, 'store'])->name('rental_store');
Route::get('/rental/edit/{id}', [App\Http\Controllers\RentalController::class, 'edit'])->name('rental_edit');
Route::put('/rental/update/{id}', [App\Http\Controllers\RentalController::class, 'update'])->name('rental_update');
Route::delete('/rental/delete/{id}', [App\Http\Controllers\RentalController::class, 'destroy'])->name('rental_delete');