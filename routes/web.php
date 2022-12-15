<?php

use App\Http\Controllers\AdverseventController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\TrainingController;
use App\Models\Attendance;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('home');
})->middleware('verified', 'auth');

Route::resource('slides', SlideController::class);
Route::resource('train', TrainingController::class);
Route::resource('attendances', AttendanceController::class);

Route::resource('employees', EmployeeController::class);
Route::resource('adversevents', AdverseventController::class);

Route::get('vcards', [EmployeeController::class, 'vcards'])->name('employees.vcards');
Route::get('search', [EmployeeController::class, 'vcardSearch'])->name('employees.search');


Route::group(['middleware' => 'auth'], function () {
    // Employee
    Route::post('employees/update', [EmployeeController::class, 'update'])->name('employees.update');
    Route::get('employees/destroy/{id}', [EmployeeController::class, 'destroy']);
    Route::get('employees/destroy-photo/{id}', [EmployeeController::class, 'destroyPhoto'])->name('employees.photo');
    Route::get('export', [EmployeeController::class, 'exportTable'])->name('employees.export');
    Route::get('phonelist', [EmployeeController::class, 'exportPhoneList'])->name('employees.phonelist');
    Route::get('list', [EmployeeController::class, 'exportList'])->name('employees.list');

    // Evidence
    Route::resource('evidences', EvidenceController::class);
    Route::post('evidences/update', [EvidenceController::class, 'update'])->name('evidences.update');
    Route::get('evidences/destroy/{id}', [EvidenceController::class, 'destroy']);
});
