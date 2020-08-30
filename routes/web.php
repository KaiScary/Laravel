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
<<<<<<< Updated upstream
=======


//Route::post('/inicio', 'inicioController@store');

Route::resource('/inicio', 'inicioController'); 

Route::resource('/firebase', 'FireBaseController');

Route::delete('/delete', 'FireBaseController@destroy');

>>>>>>> Stashed changes
