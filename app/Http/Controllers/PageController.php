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

	public function izinnext()
	{
		return view('izinnext');
	}
	public function about()
	{
		return view('about');
	}

}
