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

// Landing page:
Route::get('/', function () {return view('welcome'); });

// Plataforma:
Route::group(['prefix' => 'plataforma'], function (){
    // Auth:
    Auth::routes();
    //DashBoard:
    Route::get('/', function () {return view('adminlte.dashboard'); })->middleware('auth');

});
