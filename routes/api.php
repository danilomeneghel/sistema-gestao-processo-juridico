<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProcessoController;
use App\Http\Controllers\Api\TipopedidoController;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rotas API Clientes
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('cliente/{id}', [ClienteController::class, 'show']);
Route::post('cliente', [ClienteController::class, 'store']);
Route::put('cliente/{id}', [ClienteController::class, 'update']);
Route::delete('cliente/{id}', [ClienteController::class, 'destroy']);

//Rotas API Pedidos
Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedido/{id}', [PedidoController::class, 'show']);
Route::post('pedido', [PedidoController::class, 'store']);
Route::put('pedido/{id}', [PedidoController::class, 'update']);
Route::delete('pedido/{id}', [PedidoController::class, 'destroy']);

//Rotas API Processos
Route::get('processos', [ProcessoController::class, 'index']);
Route::get('processo/{id}', [ProcessoController::class, 'show']);
Route::post('processo', [ProcessoController::class, 'store']);
Route::put('processo/{id}', [ProcessoController::class, 'update']);
Route::delete('processo/{id}', [ProcessoController::class, 'destroy']);

//Rotas API Tipopedidos
Route::get('tipopedidos', [TipopedidoController::class, 'index']);
Route::get('tipopedido/{id}', [TipopedidoController::class, 'show']);
Route::post('tipopedido', [TipopedidoController::class, 'store']);
Route::put('tipopedido/{id}', [TipopedidoController::class, 'update']);
Route::delete('tipopedido/{id}', [TipopedidoController::class, 'destroy']);

//Rotas API Usuários
Route::get('users', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::post('user', [UserController::class, 'store']);
Route::put('user/{id}', [UserController::class, 'update']);
Route::delete('user/{id}', [UserController::class, 'destroy']);
