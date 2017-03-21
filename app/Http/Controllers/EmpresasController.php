<?php 

namespace Unbcrs\Http\Controllers;

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
	public function __construct()
	{
		$this->middleware('guest');
	}

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

}
