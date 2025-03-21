<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/projects/index', [ ProjectController::class, 'index' ])->name('project.index');
    Route::get('/project', [ \App\Http\Controllers\ProjectController::class, 'index'])->name('project');
    Route::get('/projects/add', [ ProjectController::class, 'add' ])->name('project.add');
    Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
