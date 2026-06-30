<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employees', EmployeeController::class);
Route::resource('roles', RoleController::class);
Route::resource('departments', DepartmentController::class);