<?php

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
    return view('portfolio.about', ['status' => 'about']);
});
Route::get('/resume', function () {
    return view('portfolio.resume', ['status' => 'resume']);
});
Route::get('/project', function () {
    return view('portfolio.project', ['status' => 'project']);
});
Route::get('/blog', function () {
    return view('portfolio.project', ['status' => 'blog']);
});
Route::get('/contact', function () {
    return view('portfolio.contact', ['status' => 'contact']);
});
