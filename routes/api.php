<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/telegram/UzJYCD2', 'TelegramController@index');
Route::get('/telegram/UzJYCD2', 'TelegramController@index');

Route::post('/delivery/create', [ApiController::class, 'index']);
