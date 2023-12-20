<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\VerifySocietyToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\JobApplicationController;

// Authentication Routes
Route::post('/v1/auth/login', [AuthController::class, 'login']);
Route::post('/v1/auth/logout', [AuthController::class, 'logout']);

// Protected Routes for Authenticated Societies
// Route::middleware(['society_auth'])->group(function () {
Route::middleware(VerifySocietyToken::class)->group(function () {
    // Data Validation Routes
    Route::post('/v1/validations', [SocietyController::class, 'requestDataValidation']);
    Route::get('/v1/validations', [SocietyController::class, 'getSocietyDataValidation']);

    // Job Vacancy Routes
    Route::get('/v1/job_vacancies', [JobVacancyController::class, 'getAllJobVacancies']);
    // Route::get('/v1/job_vacancies', [JobVacancyController::class, 'getJobVacancyDetail']);
    Route::get('/v1/job_vacancies/{id}', [JobVacancyController::class, 'getJobVacancyDetail']);


    // Job Application Routes
    Route::post('/v1/applications', [JobApplicationController::class, 'applyForJob']);
    Route::get('/v1/applications', [JobApplicationController::class, 'getAllSocietyJobApplications']);
});
