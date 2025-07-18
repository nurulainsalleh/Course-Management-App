<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course', [\App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
Route::get('/course/create', [\App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
Route::post('/course', [\App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
Route::get('/course/{id}', [\App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
Route::put('/course/{id}', [\App\Http\Controllers\CourseController::class, 'update'])->name('course.update');
Route::delete('/course/{id}', [\App\Http\Controllers\CourseController::class, 'destroy'])->name('course.destroy');      
Route::get('/course/{id}/edit', [\App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit');
Route::get('/course/{id}/delete', [\App\Http\Controllers\CourseController::class, 'delete'])->name('course.delete');
Route::post('/course/{id}/restore', [\App\Http\Controllers\CourseController::class, 'restore'])->name('course.restore');
Route::get('/course/{id}/show', [\App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
