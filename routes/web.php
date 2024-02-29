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

Route::middleware('auth')->group(function () {

    Route::middleware('menu')->group(function () {

        Route::prefix('admin')->middleware('role:admin')->name('admin.')->group(function () {

            Route::get('', DashboardController::class)->name('dashboard');
            Route::get('patient', [\App\Http\Controllers\PatientController::class, 'index'])->name('patient.index');
            Route::post('get-patient-details', [\App\Http\Controllers\PatientController::class, 'getPatientDetails'])->name('get-patient-details');

            Route::prefix('doctor')->name('doctor.')->group(function () {
                Route::get('', [\App\Http\Controllers\Common\Doctorcontroller::class, 'index'])->name('index');
                Route::get('create', [\App\Http\Controllers\Common\Doctorcontroller::class, 'create'])->name('create');
                Route::post('store', [\App\Http\Controllers\Common\Doctorcontroller::class, 'store'])->name('store');
                Route::get('edit/{doctor}', [\App\Http\Controllers\Common\Doctorcontroller::class, 'edit'])->name('edit');
                Route::post('update/{doctor}', [\App\Http\Controllers\Common\Doctorcontroller::class, 'update'])->name('update');
            });

            Route::get('appointments', [\App\Http\Controllers\Common\AppointmentController::class, 'index'])->name('appointments');

        });

        Route::prefix('patient')->middleware('role:patient')->name('patient.')->group(function () {
            Route::get('', \App\Http\Controllers\Patient\DashboardController::class)->name('dashboard');
            Route::get('appointments', [\App\Http\Controllers\Common\AppointmentController::class, 'index'])->name('appointments');
        });

        Route::prefix('staff')->middleware('role:staff')->name('staff.')->group(function () {
            Route::get('', [\App\Http\Controllers\Common\AppointmentController::class, 'index'])->name('dashboard');
        });
    });

    Route::delete('delete-model', \App\Http\Controllers\DestroyController::class)->name('destroy-model');
    Route::post('enable-disable-user', [\App\Http\Controllers\Common\UserController::class, 'enableDisable'])->name('change-user-status');
});
