<?php 

namespace Unbcrs\Http\Controllers;

class BlogController extends Controller {

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
	public function pagBlog()
	{
		return view('blog');
	}

}
