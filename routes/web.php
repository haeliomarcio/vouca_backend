<?php

use Illuminate\Support\Facades\Route;


Route::post('/authenticate', 'AuthenticateController@authenticate');
Route::get('login', [ 'as' => 'login', 'uses' => 'AuthenticateController@login']);
// Route::get('login', 'AuthenticateController@login');
Route::get('/logout', 'AuthenticateController@logout');

Route::get('/', 'SiteController@index');
Route::get('/sobre', 'SiteController@sobre');
Route::get('/marcas', 'SiteController@marcas');
Route::get('/o-boticario', 'SiteController@oBoticario');
Route::get('/cacau-show', 'SiteController@cacauShow');
Route::get('/arezzo', 'SiteController@arezzo');
Route::get('/tim', 'SiteController@tim');
Route::get('/crocs', 'SiteController@crocs');
Route::get('/magrella', 'SiteController@magrella');
Route::get('/lojas', 'SiteController@lojas');
Route::get('/trabalhe-conosco', 'SiteController@trabalheConosco');
Route::get('/contato', 'SiteController@contato');


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
