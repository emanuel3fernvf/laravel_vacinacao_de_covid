<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoteController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\VacinaController;

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

Route::resources([
    'lotes' => LoteController::class,
    'pacientes' => PacienteController::class,
    'vacinas' => VacinaController::class,
    'pacientes.vacinas' => VacinaController::class
]);
