<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::get('mision_vision', [HomeController::class, 'mision_vision'])->name('home.mision_vision');
Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('areas/{id}', [AreaController::class, 'show'])->name('areas.show');

Route::get('training-centers', [TrainingCenterController::class, 'index'])->name('training-centers.index');
Route::get('training-centers/{id}', [TrainingCenterController::class, 'show'])->name('training-centers.show');

Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('teachers/{id}', [TeacherController::class, 'show'])->name('teachers.show');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/{id}', [CourseController::class, 'show'])->name('courses.show');

Route::get('computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('computers/{id}', [ComputerController::class, 'show'])->name('computers.show');

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');
Route::get('apprentices/{id}', [ApprenticeController::class, 'show'])->name('apprentices.show');

Route::get('categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('category/create', [CategoriesController::class, 'create'])->name('category.create');
Route::post('category', [CategoriesController::class, 'store'])->name('category.store');
Route::get('category/{category}', [CategoriesController::class, 'show'])->name('category.show');
Route::get('category/{category}/editar', [CategoriesController::class, 'edit'])->name('category.edit');
Route::put('category/{category}', [CategoriesController::class, 'update'])->name('category.update');
Route::delete('category/{category}', [CategoriesController::class, 'destroy'])->name('category.destroy');

Route::get('posts', [PostController::class, 'index'])->name('posts');
