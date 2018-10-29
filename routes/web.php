<?php

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

// Routes after Auth
Route::middleware(['auth'])->group(function () {
	Route::get('/clientes/grid', 'ClientesController@grid');
	Route::resource('/clientes', 'ClientesController');
  Route::get('/processos/grid', 'ProcessosController@grid');
  Route::resource('/processos', 'ProcessosController');
  Route::get('/pedidos/grid', 'PedidosController@grid');
  Route::resource('/pedidos', 'PedidosController');
  Route::get('/tipopedidos/grid', 'TipopedidosController@grid');
  Route::resource('/tipopedidos', 'TipopedidosController');
});
