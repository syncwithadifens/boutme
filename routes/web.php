<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Models\Certificate;

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

Route::get('/', [AboutController::class, 'index']);
Route::resource('about', AboutController::class);
Route::resource('resume', ResumeController::class);
Route::resource('project', ProjectController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('contact', ContactController::class);
