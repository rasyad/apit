<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class IzinController extends Controller {
	private $izinstatus_show;

	public function show_izinstatus() {
		$izinstatus = DB::table('izinstatus')->get();
		//$izinstatus = $this->izinstatus_show->get();
		
		return view('statusizin', compact('izinstatus'));
	}

}
