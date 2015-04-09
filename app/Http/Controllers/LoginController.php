<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Input;
use App\Quotation;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller {

	public function index()
	{
		return view('login');
	}

	public function validasi()
	{

		$inputUsername = Input::get('name');
		$inputPassword = Input::get('password');

		echo (Input::get('name'));
		echo (Input::get('password'));

		$results = DB::select('select * from users where name="'.$inputUsername.'" and password="'.$inputPassword.'"');
		if ($results!=NULL) 
		{
			Session::put('name', $inputUsername);
			return redirect('/');
		}
		else 
		{
			return redirect('login');
		}

	}




}
