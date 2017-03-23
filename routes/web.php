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
Route::post('/regunibecario', 'EstudiantesController@regEstudiantesPost');
Route::get('/regempresa', 'EmpresasController@regEmpresas');
Route::post('/regempresa','EmpresasController@regEmpresasPost');
Route::get('/reguniversidad', 'UniversidadesController@regUniversidades');
Route::post('/reguniversidad','UniversidadesController@regUniversidadPost');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/blog', 'PostController@index');
Route::get('/blog',['as' => 'home', 'uses' => 'PostController@index']);
 

//check for logged in user
Route::group(['middleware' => ['auth']], function()
{
    // show new post form
    Route::get('new-post','PostController@create');
    // save new post
    Route::post('new-post','PostController@store');
    // edit post form
    Route::get('edit/{slug}','PostController@edit');
    // update post
    Route::post('update','PostController@update');
    // delete post
    Route::get('delete/{id}','PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts','UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts','UserController@user_posts_draft');
    // add comment
    Route::post('comment/add','CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}','CommentController@distroy');
});

//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');




/*Codigo para probar la conexion a la base de datos*/
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

/*
Route::post('/regunibecario1',
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
);*/
