<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModuleController;
use App\Models\Enseignant;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [LoginController::class, 'index'])->name('dashboard');

    Route::prefix('/enseignant')->group(function () {
        Route::get('/', [EnseignantController::class, 'index'])->name('enseignant.show');
        Route::get('/create', [EnseignantController::class, 'create'])->name('enseignant.create');
    });

    Route::prefix('/etudiant')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('etudiant.show');
        Route::get('/create', [StudentController::class, 'createView'])->name('etudiant.create');
        Route::get('/update', [StudentController::class, 'updateView'])->name('etudiant.update');
        Route::get('/delete', [StudentController::class, 'deleteView'])->name('etudiant.delete');

    });

    Route::prefix('/module')->group(function () {
        Route::get('/', [ModuleController::class, 'index'])->name('module.show');
        Route::get('/create', [ModuleController::class, 'createView'])->name('module.create');
        Route::get('/update', [ModuleController::class, 'updateView'])->name('module.update');
        Route::get('/delete', [ModuleController::class, 'deleteView'])->name('module.delete');
    });
});
// [TO DO] : study route groupe notion
