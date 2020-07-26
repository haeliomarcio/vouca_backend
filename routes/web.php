<?php

use Illuminate\Support\Facades\Route;


Route::post('/authenticate', 'AuthenticateController@authenticate');
Route::get('login', [ 'as' => 'login', 'uses' => 'AuthenticateController@login']);
// Route::get('login', 'AuthenticateController@login');
Route::get('/logout', 'AuthenticateController@logout');

Route::get('/', function () { return view('site.index'); });
Route::get('/sobre', function () { return view('site.sobre'); });
Route::get('/marcas', function () { return view('site.marcas'); });
Route::get('/trabalhe-conosco', function () { return view('site.trabalhe-conosco'); });


Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'DashboardController@index');
        
        Route::prefix('news')->group(function () {
            Route::get('', 'NewsController@index');
            Route::get('create', 'NewsController@create');
            Route::get('edit/{id}', 'NewsController@edit');
            Route::post('store', 'NewsController@store');
            Route::post('update/{id}', 'NewsController@update');
            Route::get('delete/{id}', 'NewsController@destroy');
        });

        Route::prefix('stores')->group(function () {
            Route::get('', 'StoresController@index');
            Route::get('create', 'StoresController@create');
            Route::get('edit/{id}', 'StoresController@edit');
            Route::post('store', 'StoresController@store');
            Route::post('update/{id}', 'StoresController@update');
            Route::get('delete/{id}', 'StoresController@destroy');
        });

        Route::prefix('jobs')->group(function () {
            Route::get('', 'JobsDeploymentController@index');
            Route::get('create', 'JobsDeploymentController@create');
            Route::get('edit/{id}', 'JobsDeploymentController@edit');
            Route::post('store', 'JobsDeploymentController@store');
            Route::post('update/{id}', 'JobsDeploymentController@update');
            Route::get('delete/{id}', 'JobsDeploymentController@destroy');
        });

        Route::prefix('curriculum')->group(function () {
            Route::get('', 'CurriculumController@index');
            Route::get('create', 'CurriculumController@create');
            Route::get('edit/{id}', 'CurriculumController@edit');
            Route::post('store', 'CurriculumController@store');
            Route::post('update/{id}', 'CurriculumController@update');
            Route::get('delete/{id}', 'CurriculumController@destroy');
        });

        Route::prefix('users')->group(function () {
            Route::get('', 'UsersController@index');
            Route::get('create', 'UsersController@create');
            Route::get('edit/{id}', 'UsersController@edit');
            Route::post('store', 'UsersController@store');
            Route::post('update/{id}', 'UsersController@update');
            Route::get('delete/{id}', 'UsersController@destroy');
        });
    });
});
