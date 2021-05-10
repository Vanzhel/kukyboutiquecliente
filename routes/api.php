<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('cargo','CargoController');
Route::apiResource('horario','HorarioController');
Route::apiResource('horarioempleado','HorarioEmpleadoController');
Route::apiResource('empleado','EmpleadoController');
Route::apiResource('documento','DocumentoController');
Route::apiResource('pregunta','PreguntaController');
Route::apiResource('perfil','PerfilController');