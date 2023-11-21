<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SmaController;
use App\Http\Controllers\SmkController;
use App\Http\Controllers\MuridController;


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
    return view('welcome');
});

Route::get('/sma/all', [SmaController::class, 'index']);
Route::get('/sma/detail/{sma}', [SmaController::class, 'show']);

Route::get('/smk/all', [SmkController::class, 'index']);
Route::get('/smk/detail/{smk}', [SmkController::class, 'show']);

Route::get('/murid/all', [MuridController::class, 'index']);
Route::get('/murid/detail/{murid}', [MuridController::class, 'show']);


