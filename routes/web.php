<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoControllers;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//intern
Route::get('/intern-dashboard',[App\Http\Controllers\Intern\InternController::class,'index']);
Route::get('/create',[App\Http\Controllers\Intern\InternController::class,'create']);
Route::post('/intern',[App\Http\Controllers\Intern\InternController::class,'store']);
Route::get('/intern/edit{id}',[App\Http\Controllers\Intern\InternController::class,'editIntern']);
Route::put('/intern/update{id}',[App\Http\Controllers\Intern\InternController::class,'updateIntern']);

//organisation
Route::get('/organisation-dashboard',[App\Http\Controllers\Organisation\OrganisationController::class,'index']);
Route::get('/create-staff',[App\Http\Controllers\Organisation\OrganisationController::class,'create']);
