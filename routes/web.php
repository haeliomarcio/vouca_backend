<?php

use Illuminate\Support\Facades\Route;


Route::post('/authenticate', 'AuthenticateController@authenticate');
Route::get('login', 'AuthenticateController@login');
Route::get('/logout', 'AuthenticateController@logout');

Route::get('/', function () { return view('site.index'); });
Route::get('/sobre', function () { return view('site.sobre'); });
Route::get('/contato', function () { return view('site.sobre'); });
Route::get('/trabalhe-conosco', function () { return view('site.trabalhe-conosco'); });


Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'DashboardController@index');
        Route::prefix('noticias')->group(function () {
            Route::get('/', 'NotificasController@index');
            Route::get('/{id}', 'NotificasController@show');
            Route::post('/store', 'NotificasController@store');
            Route::put('/update/{id}', 'NotificasController@update');
            Route::delete('/delete/{id}', 'NotificasController@destroy');
        });
        Route::prefix('curriculos')->group(function () {
            Route::get('/', 'CurriculosController@index');
            Route::get('/{id}', 'CurriculosController@show');
            Route::post('/store', 'CurriculosController@store');
            Route::put('/update/{id}', 'CurriculosController@update');
            Route::delete('/delete/{id}', 'CurriculosController@destroy');
        });
        Route::prefix('lojas')->group(function () {
            Route::get('/', 'LojasController@index');
            Route::get('/{id}', 'LojasController@show');
            Route::post('/store', 'LojasController@store');
            Route::put('/update/{id}', 'LojasController@update');
            Route::delete('/delete/{id}', 'LojasController@destroy');
        });
        Route::prefix('usuarios')->group(function () {
            Route::get('/{search?}', 'UsuariosController@index');
            Route::get('/edit/{id}', 'UsuariosController@show');
            Route::post('/store', 'UsuariosController@store');
            Route::put('/update/{id}', 'UsuariosController@update');
            Route::get('/delete/{id}', 'UsuariosController@destroy');
        });
    });
});
