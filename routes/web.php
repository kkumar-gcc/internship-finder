<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoControllers;
use App\Http\Controllers\InternController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/demo',[demoControllers::class,'index']);
Route::get('/dashboard',[InternController::class,'index2']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search',[InternController::class,'searchIntern']);
Route::get('/demo/search',[InternController::class,'findIntern'])->name('demo/search');