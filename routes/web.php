<?php

use App\Http\Controllers\AdverseventController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TrainingController;
use Illuminate\Support\Facades\Route;

// Index page
Route::get("/", function () {
    return view('welcome', ['category' => 'Oznámení', 'title' => 'Přehled']);
});

// Home page
Route::get("home", function () {
    return view('home', ['category' => 'Uživatel', 'title' => 'Home']);
});

// Oznámení
Route::prefix('oznameni')->name('oznameni.')->group(function () {
    Route::get('zmeny', [PageController::class, 'zmeny'])->name('zmeny');
    Route::get('akord', [PageController::class, 'akord'])->name('akord');
    Route::get('servis', [PageController::class, 'servis'])->name('servis');
    Route::get('seminare', [PageController::class, 'seminare'])->name('seminare');
    Route::get('sluzby', [PageController::class, 'sluzby'])->name('sluzby');
    Route::get('informace', [PageController::class, 'informace'])->name('informace');
    Route::get('kultura', [PageController::class, 'kultura'])->name('kultura');
});

// Stravování
Route::prefix('stravovani')->name('stravovani.')->group(function () {
    Route::get('obedy', [PageController::class, 'obedy'])->name('obedy');
    Route::get('kantyna', [PageController::class, 'kantyna'])->name('kantyna');
});

// Standardy
Route::prefix('standardy')->name('standardy.')->group(function () {
    Route::get('akreditacni/{id}', [PageController::class, 'akreditacni'])->name('akreditacni');
    Route::get('osetrovatelske/{id}', [PageController::class, 'standard'])->name('osetrovatelske');
    Route::get('lecebne/{id}', [PageController::class, 'lecebne'])->name('lecebne');
    Route::get('specialni/{id}', [PageController::class, 'standard'])->name('specialni');
    Route::get('operacni/{id}', [PageController::class, 'standard'])->name('operacni');
    Route::get('anesteziologicke/{id}', [PageController::class, 'standard'])->name('anesteziologicke');
    Route::get('rdg/{id}', [PageController::class, 'standard'])->name('rdg');
    Route::get('rehabilitacni/{id}', [PageController::class, 'standard'])->name('rehabilitacni');
    Route::get('opl/{id}', [PageController::class, 'standard'])->name('opl');
    Route::get('okb/{id}', [PageController::class, 'standard'])->name('okb');
    Route::get('logopedicke/{id}', [PageController::class, 'standard'])->name('logopedicke');
    Route::get('legislativni/{id}', [PageController::class, 'standard'])->name('legislativni');
});

// Media
Route::prefix('media')->name('media.')->group(function () {
    Route::get('radio', [PageController::class, 'radio'])->name('radio');
    Route::get('videa', [PageController::class, 'video'])->name('videa');
});

// Attendace
Route::resource('slides', SlideController::class);
Route::resource('train', TrainingController::class);
Route::resource('attendances', AttendanceController::class);

// Employees
Route::resource('employees', EmployeeController::class);
Route::resource('adversevents', AdverseventController::class);
Route::resource('documents', DocumentController::class);

Route::get('vcards', [EmployeeController::class, 'vcards'])->name('employees.vcards');
Route::get('search', [EmployeeController::class, 'vcardSearch'])->name('employees.search');

// Auth Routes
Route::group(['middleware' => 'auth'], function () {
    // Employee
    Route::post('employees/update', [EmployeeController::class, 'update'])->name('employees.update');
    Route::get('employees/destroy/{id}', [EmployeeController::class, 'destroy']);
    Route::get('employees/destroy-photo/{id}', [EmployeeController::class, 'destroyPhoto'])->name('employees.photo');
    Route::get('export', [EmployeeController::class, 'exportTable'])->name('employees.export');
    Route::get('phonelist', [EmployeeController::class, 'exportPhoneList'])->name('employees.phonelist');
    Route::get('list', [EmployeeController::class, 'exportList'])->name('employees.list');

    // Adverse Events
    Route::post('adversevent/update', [AdverseventController::class, 'update'])->name('adverseevents.update');
    Route::get('adversevent/destroy/{id}', [AdverseventController::class, 'destroy']);

    // Document Events
    Route::post('documents/update', [DocumentController::class, 'update'])->name('documents.update');
    Route::get('documents/destroy/{id}', [DocumentController::class, 'destroy']);

    // Evidence
    Route::resource('evidences', EvidenceController::class);
    Route::post('evidences/update', [EvidenceController::class, 'update'])->name('evidences.update');
    Route::get('evidences/destroy/{id}', [EvidenceController::class, 'destroy']);
});
