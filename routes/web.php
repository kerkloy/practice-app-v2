<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/Employee',[EmployeeController::class, 'index'])->name('employee.index');
Route::get('/Employee/create',[EmployeeController::class, 'create'])->name('employee.create');
Route::post('/Employee/record',[EmployeeController::class, 'record'])->name('employee.record');
Route::post('/Employee/{Employee}/edit',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/Employee/{Employee}/update',[EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/Employee/{Employee}/delete',[EmployeeController::class, 'delete'])->name('employee.delete');