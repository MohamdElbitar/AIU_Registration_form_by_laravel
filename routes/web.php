<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


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

// Route::get('/submit-form', [App\Http\Controllers\FormController::class, 'showForm'])->name('submit-form');
// Route::post('/submit-form', [App\Http\Controllers\FormController::class, 'processForm'])->name('submit-form');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/student-data/create', [FormController::class, 'create'])->name('student-data.create');
Route::post('/student-data', [FormController::class, 'store'])->name('student-data.store');
