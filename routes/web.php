<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function() { return "about"; })->name('about');
Route::get('/routes', function() { return "routes"; })->name('routes');
Route::get('/slots', function() { return "slots"; })->name('slots');
Route::get('/apply', function() { return "apply"; })->name('apply');
Route::get('/donate', function() { return "donate"; })->name('donate');

Auth::routes(['register' => false]);
