<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\DonateController,
    App\Http\Controllers\Pages\RouteController,
    App\Http\Controllers\Pages\RouteImageController,
    App\Http\Controllers\Pages\SlotController,
    App\Http\Controllers\Pages\SlotImageController,
    App\Http\Controllers\Pages\ApplyController,
    App\Http\Controllers\Resources\ApplicationController,
    App\Http\Controllers\Dashboard\Pages\DashboardController,
    App\Http\Controllers\Dashboard\Resources\SlotManagementController,
    App\Http\Controllers\Dashboard\Resources\RouteManagementController,
    App\Http\Controllers\Pages\MediaController,
    App\Http\Controllers\Resources\MediaManagementController;

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
Route::get('/routes', [RouteController::class, 'index'])->name('routes');
//Route::get('/route/{route:number}/image', [RouteImageController::class, 'index'])->name('route-image');
Route::get('/route/{route:number}', [RouteController::class, 'show'])->name('route');
Route::get('/slots', [SlotController::class, 'index'])->name('slots');
Route::get('/media', [MediaController::class, 'index'])->name('media');
//Route::get('/slot/{slot:number}/image', [SlotImageController::class, 'index'])->name('slot-image');
Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
Route::get('/donate', [DonateController::class, 'index'])->name('donate');
Route::redirect('/event', 'https://truckersmp.com/events/10585');
Route::redirect('/discord', 'https://discord.gg/hbwQ6hHvDT');
Route::redirect('/twitter', 'https://twitter.com/ct_convoy');
Route::redirect('/hunt', 'https://forms.gle/dMEgvuZZydhr6UeG7');
Route::redirect('/twitch', 'https://www.twitch.tv/childrenstrustconvoy_');

Route::get('/apply/{application:route}', [ApplyController::class, 'show'])->name('application');

Route::prefix('api')->group(static function() {
    Route::post('application/{application:id}', [ApplicationController::class, 'store']);

    Route::post('slot-management/{slot:id}', [SlotManagementController::class, 'update']);
    Route::post('media-management', [MediaManagementController::class, 'store']);
    Route::delete('media-management/{media:id}', [MediaManagementController::class, 'destroy']);
    Route::post('route-management/{route:id}', [RouteManagementController::class, 'update']);
});

Route::prefix('staff')->group(static function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});


Auth::routes(['register' => false]);
