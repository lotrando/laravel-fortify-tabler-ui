<?php

use App\Http\Controllers\EmployeeController;
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

Route::resource('employees', EmployeeController::class);
Route::post('employees/update', [EmployeeController::class, 'update'])->name('employees.update');
Route::get('employees/destroy/{id}', [EmployeeController::class, 'destroy']);
