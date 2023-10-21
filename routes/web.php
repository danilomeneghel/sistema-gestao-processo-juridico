<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\TipopedidoController;
use App\Models\Cidade;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::get('/ufs/', function($uf = null){
        return response()->json(Cidade::select('uf')->distinct('uf')->orderBy('uf')->get());
    });

    Route::get('/cidades/{uf}', function($uf = null){
        return response()->json(Cidade::where('uf', $uf)->orderBy('nome')->get());
    });

    Route::get('/profile', 'RegisterController@edit')->name('profile.edit');
    Route::put('/profile', 'RegisterController@update')->name('profile.update');

	Route::group(['middleware' => ['guest']], function() {
		Route::get('/register', 'RegisterController@show')->name('register.show');
		Route::post('/register', 'RegisterController@register')->name('register.perform');

		Route::get('/login', 'LoginController@show')->name('login.show');
		Route::post('/login', 'LoginController@login')->name('login.perform');
	});

	Route::group(['middleware' => ['auth']], function() {

		Route::get('/', 'HomeController@index')->name('home');

		Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('/clientes/grid', [ClienteController::class, 'grid'])->name('clientes.grid');
        Route::get('/pedidos/grid', [PedidoController::class, 'grid'])->name('pedidos.grid');
        Route::get('/processos/grid', [ProcessoController::class, 'grid'])->name('processos.grid');
        Route::get('/tipopedidos/grid', [TipopedidoController::class, 'grid'])->name('tipopedidos.grid');

        Route::prefix('clientes')->group(function(){
		    Route::get('/', [ClienteController::class, 'index'])->name('clientes');
		    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
		    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store');
		    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
		    Route::put('/{id}', [ClienteController::class, 'update'])->name('clientes.update');
		    Route::get('/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
		});

		Route::prefix('pedidos')->group(function(){
		    Route::get('/', [PedidoController::class, 'index'])->name('pedidos');
		    Route::get('/create', [PedidoController::class, 'create'])->name('pedidos.create');
		    Route::post('/', [PedidoController::class, 'store'])->name('pedidos.store');
		    Route::get('/{id}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');
		    Route::put('/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
		    Route::get('/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
		});

		Route::prefix('processos')->group(function(){
		    Route::get('/', [ProcessoController::class, 'index'])->name('processos');
		    Route::get('/create', [ProcessoController::class, 'create'])->name('processos.create');
		    Route::post('/', [ProcessoController::class, 'store'])->name('processos.store');
		    Route::get('/{id}/edit', [ProcessoController::class, 'edit'])->name('processos.edit');
		    Route::put('/{id}', [ProcessoController::class, 'update'])->name('processos.update');
		    Route::get('/{id}', [ProcessoController::class, 'destroy'])->name('processos.destroy');
		});

        Route::prefix('tipopedidos')->group(function(){
            Route::get('/', [TipopedidoController::class, 'index'])->name('tipopedidos');
            Route::get('/create', [TipopedidoController::class, 'create'])->name('tipopedidos.create');
            Route::post('/', [TipopedidoController::class, 'store'])->name('tipopedidos.store');
            Route::get('/{id}/edit', [TipopedidoController::class, 'edit'])->name('tipopedidos.edit');
            Route::put('/{id}', [TipopedidoController::class, 'update'])->name('tipopedidos.update');
            Route::get('/{id}', [TipopedidoController::class, 'destroy'])->name('tipopedidos.destroy');
        });

	});
});
