<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\GMDashboardController;
use App\Http\Controllers\EmployeeInputController;
use App\Http\Controllers\ManagerInputController;
use App\Http\Controllers\GMInputController;
use App\Http\Controllers\EmployeeListController;
use App\Http\Controllers\ManagerListController;
use App\Http\Controllers\GMListController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\EditListController;

Route::get('/' , [LoginController::class ,'index']);
Route::get('/login' , [LoginController::class ,'index'])->name("login");
Route::post('/submit' , [LoginController::class ,'store'])->name("submit");

Route::get('/signup' , [SignUpController::class ,'index'])->name("signup");
Route::post('/putup' , [SignUpController::class ,'store'])->name("putup");

Route::get('/employee/dashboard' , [EmployeeDashboardController::class , 'index'])->name("employee_dashboard");
Route::get('/manager/dashboard' , [ManagerDashboardController::class , 'index'])->name("manager_dashboard");
Route::get('/gm/dashboard' , [GMDashboardController::class , 'index'])->name("gm_dashboard");

Route::get('/employee' , [EmployeeInputController::class , 'index'])->name("employee");
Route::post('/keep' , [EmployeeInputController::class ,'store'])->name("keep");
Route::get('/update/{id}' , [EmployeeInputController::class ,'show'])->name("show");
Route::post('/update/employee/{id}' , [EmployeeInputController::class ,'update'])->name("update");
Route::get('/erase/{id}' , [EmployeeInputController::class , 'destroy'])->name("erase");

Route::get('/manager' , [ManagerInputController::class ,'index'])->name('manager');
Route::get('/manager/approve/{id}',[ManagerInputController::class ,'update'])->name('manager_approve');
Route::get('/manager/decline/{id}' , [ManagerInputController::class ,'decline'])->name('manager_decline');

Route::get('/gm' , [GMInputController::class ,'index'])->name('gm');
Route::get('/gm/approve/{id}',[GMInputController::class ,'update'])->name('gm_approve');
Route::get('/gm/decline/{id}' , [GMInputController::class ,'decline'])->name('gm_decline');

Route::get('/employee/list' , [EmployeeListController::class , 'index'])->name("employee_list");
Route::get('/manager/list' , [ManagerListController::class , 'index'])->name("manager_list");
Route::get('/gm/list' , [GMListController::class , 'index'])->name("gm_list");

Route::get('/edit' , [EditListController::class , 'index'])->name("edit");
