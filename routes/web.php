<?php

use App\Http\Controllers\InspectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeisController;
use App\Models\Inspection;
use App\Http\Controllers\DocumentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cases', [KeisController::class, 'index'])->name('cases.index');
Route::get('/inspections', [InspectionController::class, 'index'])->name('inspections.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::middleware('')->group(function () {

    Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
    Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show');



});

Route::middleware('auth')->group(function () {
        Route::get('/inspections/{id}', [InspectionController::class, 'show'])->name('inspections.show');
        Route::get('/inspections/{id}/edit', [InspectionController::class, 'edit'])->name('inspections.edit');
        Route::put('/inspections/{id}', [InspectionController::class, 'update'])->name('inspections.update');
        Route::get('/inspections/create', [InspectionController::class, 'create'])->name('inspections.create');
        Route::post('/inspections', [InspectionController::class, 'store'])->name('inspections.store');
        Route::delete('/inspections/{id}', [InspectionController::class, 'destroy'])->name('inspections.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
