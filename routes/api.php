<?php

use App\Http\Controllers\API\GradeController;
use App\Http\Controllers\API\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Student Routes
Route::get('students/all', [StudentsController::class,'getAllStudents']);

// Grade Routes
Route::get('grades/id', [GradeController::class,'getGradeIds']);