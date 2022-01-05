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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/make_appointment', [App\Http\Controllers\HomeController::class, 'make_appointment'])->name('make_appointment');
Route::get('/allservices', [App\Http\Controllers\HomeController::class, 'allservices'])->name('services');
Route::get('/allreviews', [App\Http\Controllers\HomeController::class, 'allreviews'])->name('reviews');
Route::get('/allgalleries', [App\Http\Controllers\HomeController::class, 'allgalleries'])->name('gallery');
Route::get('/allappointments', [App\Http\Controllers\HomeController::class, 'allappointments'])->name('appoitments');

