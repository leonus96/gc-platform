<?php

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

Route::get('/', function () {
    return view('welcome');
});

//API
Route::prefix('api')->group(function () {
    // Token:
    Route::get('/token', function () {

    });
    // Personas:
    Route::get('/personas', 'PersonaController@index')->name('personas.index');
    Route::get('/personas/total', 'PersonaController@count')->name('personas.count');
    Route::get('/personas/por-vencer', 'PersonaController@toExpire')->name('personas.toExpire');
    Route::post('/personas', 'PersonaController@store')->name('personas.store');
    Route::get('/personas/{id}', 'PersonaController@show')->name('personas.show');
    Route::put('/personas/{id}', 'PersonaController@update')->name('personas.update');
    Route::delete('/personas/{id}', 'PersonaController@destroy')->name('personas.destroy');

    // Empresas:
});
