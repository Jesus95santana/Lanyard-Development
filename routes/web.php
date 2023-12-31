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
    return view('home');
})->name('homePage');

Route::get('/excavationSites', function () {
    return view('excavationSites');
})->name('excavationPage');

Route::get('/warnellBorrowPit', function () {
    return view('warnellPage');
})->name('warnellPage');

Route::get('/contact', function() {
    return view('contact');
})->name('contactPage');

Route::get('/welcome', function () {
    return view('welcome');
});
