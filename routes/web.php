<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.layouts');
});

Route::resource('students', StudentController::class);
Route::resource('teachers', TeachersController::class);



