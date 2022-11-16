<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvidenceController;
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

// Employee
Route::resource('employees', EmployeeController::class);
Route::post('employees/update', [EmployeeController::class, 'update'])->name('employees.update');
Route::get('employees/destroy/{id}', [EmployeeController::class, 'destroy']);
Route::get('employees/destroy-photo/{id}', [EmployeeController::class, 'destroyPhoto'])->name('employees.photo');
Route::get('exportcsv', [EmployeeController::class, 'exportTableCsv'])->name('employees.export.csv');
Route::get('exportxls', [EmployeeController::class, 'exportTableXls'])->name('employees.export.xls');

// evidence
Route::resource('evidences', EvidenceController::class);
Route::post('evidences/update', [EvidenceController::class, 'update'])->name('evidences.update');
Route::get('evidences/destroy/{id}', [EvidenceController::class, 'destroy']);
