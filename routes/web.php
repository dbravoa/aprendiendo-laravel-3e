<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class);
Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes', 'index');
    Route::post('/clientes/store', 'store');
    Route::get('/clientes/create', 'create');
    Route::get('/clientes/edit/{cliente}', 'edit');
    Route::put('/clientes/update/{cliente}', 'update');
    Route::delete('/clientes/destroy/{cliente}', 'destroy');
    Route::get('/clientes/{cliente}/{categoria_cliente?}', 'show');
});
