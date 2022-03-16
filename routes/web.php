<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoControllers;
use App\Http\Controllers\Organization\InternshipController;
use App\Http\Controllers\Organization\OrganizationController;
use App\Http\Controllers\ProposelController;
use App\Http\Controllers\ResetPasswordController;
// use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;


use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
Route::get('/demo', [demoControllers::class, 'index']);

Auth::routes();


Route::group(['middleware' => ['user_type', 'auth',]], function () {

    /********************************
    |        intern routing          |
     *********************************/

    Route::group([
        'prefix' => 'intern',
        'middleware' => 'can:isIntern',
        'as' => 'intern.'
    ], function () {

        Route::group(['middleware' => ['isInternComplete']], function () {

            Route::get('dashboard', [App\Http\Controllers\Intern\InternController::class, 'index']);
            Route::get('/organizations', [App\Http\Controllers\Intern\InternController::class, 'organizations']);
            Route::get('/organizations/{token}', [App\Http\Controllers\Intern\InternController::class, 'organizationProfile']);
            Route::get('/internships', [App\Http\Controllers\Intern\InternController::class, 'internships']);
            Route::get('/internships/{token}', [App\Http\Controllers\Intern\InternController::class, 'internshipProfile']);
            Route::get('/internships/manage/{token}', [App\Http\Controllers\Intern\InternController::class, 'internshipsManage']);
            Route::get('/apply/{internName}/{token}', [ProposelController::class, 'applyForm']);
            Route::post('/proposel/{internName}/{token}', [ProposelController::class, 'store']);


            Route::get('/internship/{token}/dashboard/{proposel}', [App\Http\Controllers\Intern\InternController::class, 'internshipDashboard']);
            Route::get('task/proposel/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'index']);
            Route::post('task/create', [App\Http\Controllers\Intern\HistoryController::class, 'store']);
            Route::post('task/update/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'updateHistory']);
            Route::delete('task/delete/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'destroy']);
    
        });

        Route::get('/create', [App\Http\Controllers\Intern\InternController::class, 'create']);
        Route::post('/create/profile', [App\Http\Controllers\Intern\InternController::class, 'store']);
        Route::get('/edit{id}', [App\Http\Controllers\Intern\InternController::class, 'editIntern']);
        Route::put('/update{id}', [App\Http\Controllers\Intern\InternController::class, 'updateIntern']);
    });

    /*********************************
    |     organization routing       |
     *********************************/

    Route::group([
        'prefix' => 'organization',
        'middleware' => 'can:isOrganization',
        'as' => 'organization.'
    ], function () {
        Route::group(['middleware' => ['isOrganizationComplete']], function () {

            Route::get('dashboard', [OrganizationController::class, 'index']);
            Route::get('/create-staff', [OrganizationController::class, 'create']);
            Route::get('/interns', [OrganizationController::class, 'interns']);
            Route::get('/internships', [OrganizationController::class, 'internships']);
            Route::get('/internship/{token}/proposels', [OrganizationController::class, 'internProposels']);
            Route::get('/internship/{token}/proposels/{id}', [OrganizationController::class, 'internProposel']);

            Route::get('/internship/create', [InternshipController::class, 'index']);
            Route::post('/internship/create/post', [InternshipController::class, 'store']);
            Route::post('/proposel/{internship}/{token}', [ProposelController::class, 'update']);
        });

        Route::get('/internship/{token}/dashboard/{proposel}', [App\Http\Controllers\Organization\OrganizationController::class, 'internshipDashboard']);

        // Route::get('task/proposel/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'index']);
        Route::post('task/create', [App\Http\Controllers\Intern\HistoryController::class, 'store']);
        Route::post('task/update/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'updateHistory']);
        Route::delete('task/delete/{token}', [App\Http\Controllers\Intern\HistoryController::class, 'destroy']);

        //Route::get('/create',[OrganizationController::class, 'create']);
        Route::get('/create', [OrganizationController::class, 'create']);
        Route::post('/create/profile', [OrganizationController::class, 'store']);
    });
});




Route::get('/forgot-password', [App\Http\Controllers\ResetPasswordController::class, 'index'])->name('resetpassword.request');

Route::post('/forgot-password', [App\Http\Controllers\ResetPasswordController::class, 'forgotPassword'])->name('password.email2');

Route::put('/reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'resetPassword'])->name('resetpassword.reset');

Route::get('/reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class, 'resetForm'])->name('password.update');

// Route::resource('staff', Staff\StaffController::class);


Route::get('/searchIntern', [OrganizationController::class, 'searchIntern']);

Route::get('/demo/searchIntern', [OrganizationController::class, 'findIntern'])->name('demo/searchIntern');

Route::get('/profile', [OrganizationController::class, 'profile']);

Route::get('/searchOrganization', [App\Http\Controllers\Intern\InternController::class, 'organizations']);
