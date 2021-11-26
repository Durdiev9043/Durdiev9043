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

//Route::get('/', function () {
//    return view('welcome');});
Route::view('/','index');
Route::get('RSA',[App\Http\Controllers\RSAController::class,'index'])->name('rsa');
Route::post('/RSA',[App\Http\Controllers\RSAController::class,'shifr'])->name('RSA_shifr');

Route::get('vig',[App\Http\Controllers\VigController::class,'index'])->name('vig');
Route::post('vig',[App\Http\Controllers\VigController::class,'shifr'])->name('vig_shifr');
