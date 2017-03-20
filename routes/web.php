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
Route::get('/estudiantes', 'EstudiantesController@pagEstudiantes');
Route::get('/becarios', 'BecariosController@pagBecarios');
Route::get('/universidades', 'UniversidadesController@pagUniversidades');
Route::get('/blog', 'BlogController@pagBlog');
Route::get('/avisoPrivacidad', 'AvisoPrivacidadController@pagAvisoPrivacidad');
Route::get('/regunibecario', 'EstudiantesController@regEstudiantes');
Route::get('/regempresa', 'EmpresasController@regEmpresas');
Route::get('/reguniversidad', 'UniversidadesController@regUniversidades');

Route::post('/regunibecario',
    array(
    function(){
        $name= Request::input('client');
        $escolaridad= Request::input('escolaridad');
        $semestre= Request::input('semestre');
        $email= Request::input('email');
        $phone= Request::input('number');
        $direccion=Request::input('direccion');
        
        $user= array(
            'email'=>$email,
            'name'=>$name,
        );

        $data = array(
            'email'=>$email,
            'name'=>$name,
            'escolaridad'=>$escolaridad,
            'semestre'=>$semestre,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

        Mail::send('mailregunibecarios', $data, function($message) use($data)
        {
            $message->to('anapaula@kokai.com.mx', 'Ana Paula')
                    ->subject('Nueva información de contacto');
        });

         return redirect('estudiantes')->with('status', 'Tu información fue enviada');
    })
);

Route::post('/regempresa',
    array(
    function(){
        $name= Request::input('client');
        $contacto= Request::input('contacto');
        $rubro= Request::input('rubro');
        $phone= Request::input('number');
        $direccion=Request::input('direccion');
        
        $data = array(
            'name'=>$name,
            'contacto'=>$contacto,
            'rubro'=>$rubro,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

        Mail::send('mailregempresas', $data, function($message) use($data)
        {
            $message->to('anapaula@kokai.com.mx', 'Ana Paula')
                    ->subject('Nueva información de empresa');
        });

        return redirect('empresas')->with('status', 'Tu información fue enviada');
    })
);

Route::post('/reguniversidad',
    array(
    function(){
        $name= Request::input('client');
        $contacto= Request::input('contacto');
        $puesto= Request::input('puesto');
        $phone= Request::input('number');
        $direccion=Request::input('direccion');
        
        $data = array(
            'name'=>$name,
            'contacto'=>$contacto,
            'puesto'=>$puesto,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

        Mail::send('mailreguniversidades', $data, function($message) use($data)
        {
            $message->to('anapaula@kokai.com.mx', 'Ana Paula')
                    ->subject('Nueva información de universidad');
        });

        return redirect('universidades')->with('status', 'Tu información fue enviada');
    })
);








