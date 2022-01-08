<?php


use App\Http\Controllers\OrganizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/address', [AddressController::class ,'store']);
Route::post('/organization',[OrganizationController::class,'store']);
Route::post('/intern',[App\Http\Controllers\InternController::class,'store']);
Route::post('/intern/edit{id}',[App\Http\Controllers\InternController::class,'editIntern']);
