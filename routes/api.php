<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseTeacherController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\TrainingcenterController;

//areas
Route::get('/areas', [AreaController::class,'index']);
Route::get('/areas/{area}', [AreaController::class,'show']);
Route::post('/areas', [AreaController::class,'store']);
Route::put('/areas/{area}', [AreaController::class,'update']);
Route::delete('/areas/{area}', [AreaController::class,'destroy']);

//training centers
Route::get('/training_centers', [TrainingcenterController::class,'index']);
Route::get('/training_centers/{training_center}', [TrainingcenterController::class,'show']);
Route::post('/training_centers', [TrainingcenterController::class,'store']);
Route::put('/training_centers/{training_center}', [TrainingcenterController::class,'update']);
Route::delete('/training_centers/{training_center}', [TrainingcenterController::class,'destroy']);

//courses
Route::get('/courses', [CourseController::class,'index']);
Route::get('/courses/{course}', [CourseController::class,'show']);
Route::post('/courses', [CourseController::class,'store']);
Route::put('/courses/{course}', [CourseController::class,'update']);
Route::delete('/courses/{course}', [CourseController::class,'destroy']);

//teachers
Route::get('/teachers', [TeacherController::class,'index']);
Route::get('/teachers/{teacher}', [TeacherController::class,'show']);
Route::post('/teachers', [TeacherController::class,'store']);
Route::put('/teachers/{teacher}', [TeacherController::class,'update']);
Route::delete('/teachers/{teacher}', [TeacherController::class,'destroy']);


// intermedia 


Route::get('/profesores', [TeacherController::class,'intermedia']);
Route::get('/cursos', [CourseController::class,'intermedia']);


//computers
Route::get('/computers', [ComputerController::class,'index']);
Route::get('/computers/{computer}', [ComputerController::class,'show']);
Route::post('/computers', [ComputerController::class,'store']);
Route::put('/computers/{computer}', [ComputerController::class,'update']);
Route::delete('/computers/{computer}', [ComputerController::class,'destroy']);

//course_teachers
Route::get('/course_teachers', [CourseTeacherController::class,'index']);
Route::get('/course_teachers/{course_teacher}', [CourseTeacherController::class,'show']);
Route::post('/course_teachers', [CourseTeacherController::class,'store']);
Route::put('/course_teachers/{course_teacher}', [CourseTeacherController::class,'update']);
Route::delete('/course_teachers/{course_teacher}', [CourseTeacherController::class,'destroy']);


//apprentices
Route::get('/apprentices', [ApprenticeController::class,'index']);
Route::get('/apprentices/{apprentice}', [ApprenticeController::class,'show']);
Route::post('/apprentices', [ApprenticeController::class,'store']);
Route::put('/apprentices/{apprentice}', [ApprenticeController::class,'update']);
Route::delete('/apprentices/{apprentice}', [ApprenticeController::class,'destroy']);
