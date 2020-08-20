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
Route::get('/list-lojas', 'SiteController@listLojas');
Route::get('/trabalhe-conosco', 'SiteController@trabalheConosco');
Route::get('/list-jobs', 'SiteController@listJobs');
Route::get('/vaga/{id}', 'SiteController@vaga');
Route::get('/contato', 'SiteController@contato');
Route::post('/contato', 'SiteController@sendEmail');
Route::get('/blog/{name?}', 'SiteController@noticias');
Route::get('/blog', 'SiteController@blog');
Route::get('/post', 'SiteController@post');
Route::get('/find-store', 'SiteController@findStore');
Route::get('/faji', 'SiteController@faji');

// Store Site
Route::post('send-curriculum', 'SiteController@sendCurriculum');
Route::post('contato', 'SiteController@sendEmail');
Route::prefix('states')->group(function () {
    Route::get('list-city-by-id/{state_id}', 'StatesController@listCity');
});
Route::get('/email', function() {
    return view('emails.contato');
});
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
            Route::get('', 'JobsEmploymentController@index');
            Route::get('create', 'JobsEmploymentController@create');
            Route::get('edit/{id}', 'JobsEmploymentController@edit');
            Route::post('store', 'JobsEmploymentController@store');
            Route::post('update/{id}', 'JobsEmploymentController@update');
            Route::get('delete/{id}', 'JobsEmploymentController@destroy');
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

        Route::prefix('states')->group(function () {
            Route::get('list-city-by-id/{state_id}', 'StatesController@listCity');
        });

    });
});
