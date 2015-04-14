<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\PostIzin;

class IzinController extends Controller {
	private $posti;

	public function __construct(PostIzin $postizin) {
		$this->posti = $postizin;
	}

	public function show_izinstatus() {
		//$izinstatus = DaftarIzin::get();
		$izinstatus = DB::table('izinstatus')->get();
		//$izinstatus = $this->izinstatus_show->get();
		
		return view('statusizin', compact('izinstatus'));
	}

	public function post(Request $request) {
		$postizin = new PostIzin();
		
		$postizin->fill($request->input())->save();
		
		return redirect('/');

	}

	public function show_daftarizin() {
		//$izinstatus = DaftarIzin::get();
		$daftarizin = DaftarIzin::get();
		//$izinstatus = $this->izinstatus_show->get();
		
		return view('statusizin', compact('izinstatus'));
	}

}
