<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\CepController;


Route::get('/', function () {
    return view('home');
});

Route::resource('doctors', DoctorController::class);
Route::resource('patients', PatientController::class);
Route::resource('consultations', ConsultationController::class);
Route::resource('expertises', ExpertiseController::class);

Route::get('/cep/{cep}', CepController::class);

require __DIR__.'/auth.php';
