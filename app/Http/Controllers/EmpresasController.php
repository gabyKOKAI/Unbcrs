<?php 

namespace Unbcrs\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller {

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
	public function pagEmpresas()
	{
		return view('empresas');
	}

	/**
	 * Show the register of empresas.
	 *
	 * @return Response
	 */
	public function regEmpresas()
	{
		return view('regEmpresa');
	}
	
		/**
	 * Send information to email from empresas.
	 *
	 * @return Response
	 */
	public function regEmpresasPost(Request $request){
		
		$name= $request->client;
        $contacto= $request->contacto;
        $rubro= $request->rubro;
        $phone= $request->number;
        $direccion=$request->direccion;

        $data = array(
            'name'=>$name,
            'contacto'=>$contacto,
            'rubro'=>$rubro,
            'phone'=>$phone,
            'direccion'=>$direccion,
        );

        \Mail::send('mailregempresas', $data, function($message) use($data)	
        {
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'))
                    ->subject('[EMPRESA] Nueva información');
        });

		return redirect('empresas')->with('status', 'Gracias por registrar su Empresa, tu información fue enviada y nos pondremos en contacto contigo.');
    }

}
