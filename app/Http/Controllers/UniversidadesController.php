<?php 

namespace Unbcrs\Http\Controllers;

use Illuminate\Support\Facades\Input;

class UniversidadesController extends Controller {

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
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function pagUniversidades()
	{
		return view('universidades');
	}

	/**
	 * Show the register of universidades.
	 *
	 * @return Response
	 */
	public function regUniversidades()
	{
		return view('regUniversidad');
	}
	
	public function regUniversidadPost(){		
        $name= Input::get('client');
		echo "<script type='text/javascript'>alert('$name');</script>";
        $contacto= Input::get('contacto');
        $puesto= Input::get('puesto');
        $phone= Input::get('number');
        $direccion=Input::get('direccion');
        
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
    }

}
