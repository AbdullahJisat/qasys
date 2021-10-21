<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\SendLinkController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('ques-ans')->name('ques-ans.')->group(function () {
    Route::get('/', [QuestionAnswerController::class, 'index'])->name('index');
    Route::get('/create', [QuestionAnswerController::class, 'create'])->name('create');
    Route::post('/store', [QuestionAnswerController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [QuestionAnswerController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [QuestionAnswerController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [QuestionAnswerController::class, 'destroy'])->name('delete');
});

Route::prefix('send-link')->name('send-link.')->group(function () {
    Route::get('/', [SendLinkController::class, 'index'])->name('index');
    Route::get('/links', [SendLinkController::class, 'studentIndex'])->name('student-index');
    Route::get('/create', [SendLinkController::class, 'create'])->name('create');
    Route::post('/store', [SendLinkController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SendLinkController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [SendLinkController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [SendLinkController::class, 'destroy'])->name('delete');
});

Route::prefix('course')->name('course.')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CourseController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('delete');
    Route::get('/assign-teacher', [CourseController::class, 'assignCourseTeacher'])->name('assign');
    Route::get('/teacher-assign', [CourseController::class, 'courseAssignTeacher'])->name('assign-teacher');
    Route::post('/teacher-assign-store', [CourseController::class, 'courseAssignStoreTeacher'])->name('assign.store');
    Route::get('/teacher-assign-edit/{id}', [CourseController::class, 'courseAssignEditTeacher'])->name('assign.edit');
    Route::post('/teacher-assign-update/{id}', [CourseController::class, 'courseAssignUpdateTeacher'])->name('assign.update');
    Route::get('/teacher-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteTeacher'])->name('assign.delete');
    // student
    Route::get('/assign-student', [CourseController::class, 'assignCourseStudent'])->name('assign-index');
    Route::get('/student-assign', [CourseController::class, 'courseAssignStudent'])->name('assign-student');
    Route::post('/student-assign-store', [CourseController::class, 'courseAssignStoreStudent'])->name('assign-student.store');
    Route::get('/student-assign-edit/{id}', [CourseController::class, 'courseAssignEditStudent'])->name('assign-student.edit');
    Route::post('/student-assign-update/{id}', [CourseController::class, 'courseAssignUpdateStudent'])->name('assign-student.update');
    Route::get('/student-assign-delete/{id}', [CourseController::class, 'courseAssignDeleteStudent'])->name('assign-student.delete');
});

Route::get('register/teacher', [RegisterController::class, 'techerRegister'])->name('teacher-register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');
});
Route::middleware(['auth', 'isTeacher'])->group(function () {
    Route::get('/teacher', [App\Http\Controllers\HomeController::class, 'teacher'])->name('teacher');
});
