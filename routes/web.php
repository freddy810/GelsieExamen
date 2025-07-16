<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\AbsenceController;
use App\Models\Employe;
use App\Models\Poste;
use App\Models\Departement;
use App\Models\Absence;
use Illuminate\Support\Facades\Route;


Route::get('/', [homeController::class, 'index'])->name('home');
Route::resource('employes', EmployeController::class);
Route::resource('postes', PosteController::class);
Route::resource('departements', DepartementController::class);
Route::resource('absences', AbsenceController::class);
