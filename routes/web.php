<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\checkl;
use App\Http\Controllers\checkIn;

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

Route::get('/', bookController::class);
Route::get('/check-out',function(){
    return view('check-out');
});
Route::get('/check-in',checkIn::class);
Route::get('checkl', checkl::class);

