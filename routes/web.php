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
    return view('index');
});
Route::get('bio', function () {
    return view('pages/biografia');
});
Route::get('media', function () {
    return view('pages/media');
});
Route::get('contacto', function () {
    return view('pages/contacto', ['nombre' => '', 'email' => '', 'mensaje' => '']);
});
Route::post('contacto', 'ContactoController@contactoByEmail');