<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ConsultaController;

Route::get('/consulta1', [ConsultaController::class, 'pedidosUsuario2']);
Route::get('/consulta2', [ConsultaController::class, 'pedidosConUsuario']);
Route::get('/consulta3', [ConsultaController::class, 'pedidosRangoTotal']);
Route::get('/consulta4', [ConsultaController::class, 'usuariosConR']);
Route::get('/consulta5', [ConsultaController::class, 'totalPedidosUsuario5']);
Route::get('/consulta6', [ConsultaController::class, 'pedidosOrdenados']);
Route::get('/consulta7', [ConsultaController::class, 'sumaTotalPedidos']);
Route::get('/consulta8', [ConsultaController::class, 'pedidoMasBarato']);
Route::get('/consulta9', [ConsultaController::class, 'pedidosAgrupados']);
Route::get('/consulta10', [ConsultaController::class, 'pedidosAgrupadosPorUsuario']);
Route::get('/consulta1-eloquent', [ConsultaController::class, 'pedidosUsuario2Eloquent']);
