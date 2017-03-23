<?php 

namespace Unbcrs\Http\Controllers;

/*use Illuminate\Support\Facades\Input;*/
use Illuminate\Http\Request;

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
	
	/**
	 * Send information to email of univerdiad.
	 *
	 * @return Response
	 */
	public function regUniversidadPost(Request $request){		
        $name= $request->client;
		//echo "<script type='text/javascript'>alert('$name');</script>";
        $contacto= $request->contacto;
        $puesto= $request->puesto;
        $phone= $request->number;
        $direccion=$request->direccion;
        
        $data = array(
            'name'=>$name,
            'contacto'=>$contacto,
            'puesto'=>$puesto,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

		//to('anapaula@kokai.com.mx', 'Ana Paula')
        \Mail::send('mailreguniversidades', $data, function($message) use($data)
        {
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'))
                    ->subject('[Universidad] Nueva información');
        });

		return redirect('universidades')->with('status', 'Gracias por registrar tu universidad, tu información fue enviada y nos pondremos en contacto contigo.');
    }

}
