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
    return view('layouts.home');
})->name('home');


Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('/publisher', function () {
    return view('layouts.publisher');
})->name('publisher');

