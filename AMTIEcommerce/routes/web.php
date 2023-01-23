<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comoFuncionaController;
use App\Http\Controllers\vigenciasController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\procesoCompraController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\mailController;



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
Route::get('comoFunciona', comoFuncionaController::class, 'index')->name('comoFunciona');
Route::get('vigencias', vigenciasController::class, 'index')->name('vigencias');
Route::get('faq', faqController::class, 'index')->name('faq');
Route::get('contacto', contactoController::class, 'index')->name('contacto');
Route::post('contactoMail', [mailController::class, 'store'])->name('mail');

//PROCESO COMPRA
Route::get('procesoCompra', procesoCompraController::class, 'index')->name('procesoCompra');
Route::get('checkout', checkoutController::class, 'index')->name('checkout');
