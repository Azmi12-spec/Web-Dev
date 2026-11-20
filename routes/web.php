<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::middleware(["auth","verified"])->group(function () {
    Route::inertia('dashboard','dashboard')->name('dashboard');
});


Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/about', [AboutController::class, 'index']);

Route::prefix('admin')->group(function () {

Route::get('/classroom', [ClassroomController::class, 'index'])
    ->name('admin.classrooms.index');
Route::get('/classroom/create', [ClassroomController::class, 'create'])
    ->name('admin.classrooms.create');
Route::post('/classroom', [ClassroomController::class, 'store'])
    ->name('admin.classrooms.store');
});


Route::prefix('admin')->group(function () {

Route::get('/subjects', [SubjectController::class, 'index'])
    ->name('admin.subjects.index');
Route::get('/subjects/create', [SubjectController::class, 'create'])
    ->name('admin.subjects.create');
Route::post('/subjects', [SubjectController::class, 'store'])
    ->name('admin.subjects.store');

});

Route::prefix('admin')->group(function () {
    Route::get('/teachers', [TeacherController::class, 'index'])
        ->name('admin.teachers.index');
    Route::get('/teachers/create', [TeacherController::class, 'create'])
        ->name('admin.teachers.create');
    Route::post('/teachers', [TeacherController::class, 'store'])
        ->name('admin.teachers.store');
});

Route::prefix('admin')->group(function () {
    Route::get('/student', [StudentController::class, 'index'])
        ->name('admin.students.index');
    Route::get('/student/create', [StudentController::class, 'create'])
        ->name('admin.students.create');
    Route::post('/student', [StudentController::class, 'store'])
        ->name('admin.students.store');
});
