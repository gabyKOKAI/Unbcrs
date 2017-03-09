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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/practice', function() {

    echo 'Hello World!';
    echo App::environment();
});

Route::get('/practice1', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';
});
*/

Route::get('/', 'InicioController@pagInicio');
Route::get('/somos', 'InicioController@pagInicio');
Route::get('/empresas', 'EmpresasController@pagEmpresas');
