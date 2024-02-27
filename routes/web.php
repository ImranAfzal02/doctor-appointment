<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::middleware('menu')->group(function () {

        Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function () {

           Route::get('', DashboardController::class)->name('dashboard');
           Route::get('patient', [\App\Http\Controllers\PatientController::class, 'index'])->name('patient.index');
           Route::post('get-patient-details', [\App\Http\Controllers\PatientController::class, 'getPatientDetails'])->name('get-patient-details');

           Route::prefix('doctor')->name('doctor.')->group(function () {
              Route::get('', [\App\Http\Controllers\Common\Doctorcontroller::class, 'index'])->name('index');
           });

        });

        Route::prefix('patient')->middleware('role:patient')->name('patient.')->group(function () {
           Route::get('', function () {
             dd('patient Dashboard');
           })->name('dashboard');
        });
    });

    Route::delete('delete-model', \App\Http\Controllers\DestroyController::class)->name('destroy-model');
    Route::post('enable-disable-user', [\App\Http\Controllers\Common\UserController::class, 'enableDisable'])->name('change-user-status');
});
