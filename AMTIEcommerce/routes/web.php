<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\comoFuncionaController;
use App\Http\Controllers\vigenciasController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\procesoCompraController;

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

//PROCESO COMPRA
Route::get('procesoCompra', procesoCompraController::class, 'index')->name('procesoCompra');
