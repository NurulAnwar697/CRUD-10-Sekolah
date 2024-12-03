<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('homes', function () {
    return view('home.index'); 
})->name('home.index');

Route::resource('students', StudentController::class);

Route::resource('teachers', TeacherController::class);

Route::resource('majors', MajorController::class);

Route::resource('classrooms', ClassroomController::class);

Route::resource('subjects', SubjectController::class);