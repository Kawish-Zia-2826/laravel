<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\StudentController;
use App\Models\Contact;
use App\Models\Habit;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('emp', EmployeeController::class);
Route::resource('habit',HabitController::class);
Route::resource('student',StudentController::class);
Route::resource('contact',ContactController::class);
