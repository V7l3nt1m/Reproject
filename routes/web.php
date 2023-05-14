<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::post('/cadastro-projectos2', [EventController::class, 'store'])->middleware('auth');
Route::post('/dashboard', [EventController::class, 'store2'])->middleware('auth');



Route::get('/dashboard/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/projecto/{id_projecto?}', [EventController::class, 'show']);

Route::get('/SobreNos', [EventController::class,'SobreNos']);

Route::get('/admin-itel-reproject', [EventController::class , 'adminRe'])->name('admin-itel-reproject');

Route::get('/cadastro-projectos', [EventController::class, 'cadastro'])->middleware('auth');
Route::get('/cadastro-projectos2', [EventController::class, 'cadastro2'])->middleware('auth');
