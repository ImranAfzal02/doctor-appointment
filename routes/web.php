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

Route::get('/', [\App\Http\Controllers\StaticPagesController::class, 'index']);
Route::get('/breast-physician', [\App\Http\Controllers\StaticPagesController::class, 'breastPhysician']);
Route::get('/clinic-intro', [\App\Http\Controllers\StaticPagesController::class, 'clinicIntro']);
Route::get('/consultation-expectations', [\App\Http\Controllers\StaticPagesController::class, 'consultationExpectation']);
Route::get('/intro-dr-razia', [\App\Http\Controllers\StaticPagesController::class, 'introRazia']);
Route::get('/lymphedema', [\App\Http\Controllers\StaticPagesController::class, 'lymphedema']);
Route::get('/breast-self-awareness', [\App\Http\Controllers\StaticPagesController::class, 'selfAwareness']);
Route::get('/services', [\App\Http\Controllers\StaticPagesController::class, 'services']);
Route::get('/whatsapp-redirect', [\App\Http\Controllers\StaticPagesController::class, 'whatsappRedirect']);
Route::get('/breast-screening', [\App\Http\Controllers\StaticPagesController::class, 'breastScreening']);
Route::get('/benign-conditions', [\App\Http\Controllers\StaticPagesController::class, 'benignConditions']);
Route::get('/our-team', [\App\Http\Controllers\StaticPagesController::class, 'ourTeam']);
Route::get('/clinic-contact', [\App\Http\Controllers\StaticPagesController::class, 'clinicContact']);
Route::get('/breast-cancer-diagnosis', [\App\Http\Controllers\StaticPagesController::class, 'breastCancerDiagnosis']);
Route::get('/breast-cancer-treatment', [\App\Http\Controllers\StaticPagesController::class, 'breastCancerTreatment']);
Route::get('/oncoplastic-breast-surgery', [\App\Http\Controllers\StaticPagesController::class, 'oncoPlasticBreastSurgery']);
Route::get('/breast-reconstruction', [\App\Http\Controllers\StaticPagesController::class, 'breastReconstruction']);
Route::get('/medical-tattooing-scar-therapy', [\App\Http\Controllers\StaticPagesController::class, 'medicalTattooingScarTherapy']);
Route::get('/correction-breast-deformity', [\App\Http\Controllers\StaticPagesController::class, 'correctionBreastDeformity']);
Route::get('/cosmetic-breast-surgery', [\App\Http\Controllers\StaticPagesController::class, 'cosmeticBreastSurgery']);
Route::get('/oncology-consultation', [\App\Http\Controllers\StaticPagesController::class, 'oncologyConsultation']);
Route::get('/psychology-support', [\App\Http\Controllers\StaticPagesController::class, 'psychologySupport']);
Route::get('/locations', [\App\Http\Controllers\StaticPagesController::class, 'locations']);
Route::get('/meet-our-team', [\App\Http\Controllers\StaticPagesController::class, 'meetOurTeam']);
Route::post('/submit-form', [\App\Http\Controllers\FormController::class, 'submitForm'])->name('submit.form');

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
