<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\cookiesController;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\termsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('terms', termsController::class, 'index')->name('terms.index');
Route::get('privacy', privacyController::class, 'index')->name('privacy.index');
Route::get('cookies', cookiesController::class, 'index')->name('cookies.index');
Route::post('contact', [contactController::class, 'store'])->name('contact.index');