<?php

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

// Auth:
Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

// Personas:
Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('/personas', 'PersonaController@index')->name('personas.index');
    Route::get('/personas/total', 'PersonaController@count')->name('personas.count');
    Route::get('/personas/por-vencer', 'PersonaController@toExpire')->name('personas.toExpire');
    Route::post('/personas', 'PersonaController@store')->name('personas.store');
    Route::get('/personas/{id}', 'PersonaController@show')->name('personas.show');
    Route::put('/personas/{id}', 'PersonaController@update')->name('personas.update');
    Route::delete('/personas/{id}', 'PersonaController@destroy')->name('personas.destroy');
});

// Empresas:
