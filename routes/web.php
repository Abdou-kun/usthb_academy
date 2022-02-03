<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\ExamenController;
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

// Route::resource('/student', [StudentController::class]);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [LoginController::class, 'index'])->name('dashboard');

    Route::prefix('/enseignant')->group(function () {
        Route::get('/', [EnseignantController::class, 'index'])->name('enseignant.show');
        Route::get('/create', [EnseignantController::class, 'create'])->name('enseignant.create');
    });

    Route::prefix('/etudiant')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('etudiant.index');
        Route::get('/create', [StudentController::class, 'create'])->name('etudiant.create');
        Route::post('/create', [StudentController::class, 'store'])->name('etudiant.store');
        Route::get('/show/{matricule}', [StudentController::class, 'show'])->name('etudiant.show');
        Route::put('/update/{matricule}', [StudentController::class, 'update'])->name('etudiant.update');
        Route::get('/delete/{matricule}', [StudentController::class, 'deleteView'])->name('etudiant.delete');
        Route::delete('/delete/{matricule}', [StudentController::class, 'destroy'])->name('etudiant.destroy');
        Route::post('/search', [StudentController::class, 'search'])->name('etudiant.search');
        Route::get('/search', [StudentController::class, 'searchView'])->name('etudiant.searchView');
    });


    Route::prefix('/module')->group(function () {
        Route::get('/', [ModuleController::class, 'index'])->name('module.index');
        Route::get('/create', [ModuleController::class, 'create'])->name('module.create');
        Route::post('/create', [ModuleController::class, 'store'])->name('module.store');
        Route::get('/show/{code_m}', [ModuleController::class, 'show'])->name('module.show');
        Route::put('/update/{code_m}', [ModuleController::class, 'update'])->name('module.update');
        Route::get('/delete/{code_m}', [ModuleController::class, 'deleteView'])->name('module.delete');
        Route::delete('/delete/{code_m}', [ModuleController::class, 'destroy'])->name('module.destroy');
        Route::post('/search', [ModuleController::class, 'search'])->name('module.search');
        Route::get('/search', [ModuleController::class, 'searchView'])->name('module.searchView');
    });

    Route::resource('examens', ExamenController::class)->only('create', 'store');
});
