<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function index()
	{
		return view('homepage');
	}

	public function izin()
	{
		return view('izin');
	}

	public function statusizin()
	{
		return view('statusizin');
	}

	public function about()
	{
		return view('about');
	}

	public function login()
	{
		return view('login');
	}

}
