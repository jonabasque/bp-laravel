<?php namespace App\Http\Controllers;

use \asketic\business_plan\BusinessPlan as BusinessPlan;

class WelcomeController extends Controller {

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
	public function index()
	{

		$locale=["Inglés","EEUU"];

		$planDeNegocio = new Businessplan("Alimentacion",$locale,"Ekodenda");

		var_dump($planDeNegocio);

		echo "<br><br>";

		$planDeNegocioSerialize = serialize($planDeNegocio);

		var_dump($planDeNegocioSerialize);

		return view('welcome');
	}

}
