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

		$inputNIK = Input::get('nik');
		$inputPassword = Input::get('password');

		echo (Input::get('nik'));
		echo (Input::get('password'));

		$results = DB::select('select * from ppl_dukcapil_ktp where nik="'.$inputNIK.'" and password="'.$inputPassword.'"');
		if ($results!=NULL) 
		{
			Session::put('nik', $inputNIK);
			return redirect('izin');
		}
		else 
		{
			return redirect('login');
		}

	}




}
