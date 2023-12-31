<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/{id}', 'show');
    Route::post('/contacts', 'store');
    Route::patch('/contact/{id}', 'update');
    Route::delete('/contact/{id}', 'destroy');
    Route::get('/contacts', 'showAll');
    Route::post('/cep', 'getDataByCEP');
});
