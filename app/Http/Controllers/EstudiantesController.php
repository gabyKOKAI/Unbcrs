<?php 

namespace Unbcrs\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/*Esta funcion se debe quitar porque sino cuando estas como usuario registrado te lleva solo a home
	public function __construct()
	{
		$this->middleware('guest');
	}
	*/

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function pagEstudiantes()
	{
		return view('estudiantes');
	}

	/**
	 * Show the register of students.
	 *
	 * @return Response
	 */
	public function regEstudiantes()
	{
		return view('regunibecario');
	}
	
	/**
	 * Send information to email from students.
	 *
	 * @return Response
	 */
	public function regEstudiantesPost(Request $request){

		$name=$request->client;
        $escolaridad=$request->escolaridad;
        $semestre=$request->semestre;
        $email=$request->email;
        $phone=$request->number;
        $direccion=$request->direccion;
        
        /*$user= array(
            'email'=>$email,
            'name'=>$name,
        );*/

        $data = array(
            'email'=>$email,
            'name'=>$name,
            'escolaridad'=>$escolaridad,
            'semestre'=>$semestre,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

        \Mail::send('mailregunibecarios', $data, function($message) use($data)	
        {
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'))
                    ->subject('[BECARIO] Nueva información');
        });

		return redirect('estudiantes')->with('status', 'Gracias por registrarte, tu información fue enviada y nos pondremos en contacto contigo.');
    }
}
