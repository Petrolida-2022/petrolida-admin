<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AdminController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminController::class, 'authentication']);
Route::post('/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('shortlink', ShortlinkController::class)->except('show');
});
