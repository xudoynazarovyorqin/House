<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [App\Http\Controllers\ClientController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/houses', [App\Http\Controllers\HomeController::class, 'houses'])->name('houses');
Route::post('/house-show', [App\Http\Controllers\HomeController::class, 'houseShow']);
Route::get('/clients', [App\Http\Controllers\HomeController::class, 'clients']);
Route::post('/clients', [App\Http\Controllers\HomeController::class, 'clientsPost']);

Route::get('/add-house', [App\Http\Controllers\HomeController::class, 'addHouse']);
Route::post('/add-house', [App\Http\Controllers\HomeController::class, 'addHousePost']);

Route::get('/add-podezd', [App\Http\Controllers\HomeController::class, 'addPodezd']);
Route::post('/add-podezd', [App\Http\Controllers\HomeController::class, 'addPodezdPost']);

Route::get('/floor', [App\Http\Controllers\HomeController::class, 'floor']);
Route::get('/add-floor', [App\Http\Controllers\HomeController::class, 'addFloor']);
Route::post('/add-floor', [App\Http\Controllers\HomeController::class, 'addFloorPost']);

Route::get('/apartment', [App\Http\Controllers\HomeController::class, 'apartment']);
Route::get('/add-apartment', [App\Http\Controllers\HomeController::class, 'addApartment']);
Route::post('/add-apartment', [App\Http\Controllers\HomeController::class, 'addApartmentPost']);

Route::get('/client/dom', [App\Http\Controllers\ClientController::class, 'dom']);
Route::get('/client/podezd', [App\Http\Controllers\ClientController::class, 'podezd']);
Route::get('/client/floor', [App\Http\Controllers\ClientController::class, 'floor']);
Route::get('/client/shop', [App\Http\Controllers\ClientController::class, 'shop']);
Route::post('/client/shop', [App\Http\Controllers\ClientController::class, 'create']);
