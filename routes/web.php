<?php

use Illuminate\Support\Facades\Route;
use App\models\car;
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
Route::get('/','App\Http\controllers\cars@index');
Route::get('/cars/{id}','App\Http\controllers\cars@cars')->name('cars');
Route::get('/cars/details/{id}','App\Http\controllers\cars@details')->name('deta');


