<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\PplLahanPostizin;

class IzinController extends Controller {
	private $posti;

	public function __construct(PplLahanPostizin $postizin) {
		$this->posti = $postizin;
	}

	public function show_izinstatus() {
		//$izinstatus = DaftarIzin::get();
		$ppl_lahan_izinstatus = DB::table('ppl_lahan_izinstatus')->get();
		//$izinstatus = $this->izinstatus_show->get();
		
		return view('statusizin', compact('ppl_lahan_izinstatus'));
	}

	public function post(Request $request) {
		$postizin = new PplLahanPostizin();
		
		$postizin->fill($request->input())->save();
		
		return redirect('izinnext');

	}

	public function show_daftarizin() {
		$ppl_lahan_postizins = DB::table('ppl_lahan_postizins')->get();
		//$daftarizin = DaftarIzin::get();
		//$izinstatus = $this->izinstatus_show->get();
		
		return view('daftarizin', compact('ppl_lahan_postizins'));
	}

	public function show_ktp() {
		$ppl_dukcapil_ktp = DB::table('ppl_dukcapil_ktp')->get();
		return view('izin', compact('ppl_dukcapil_ktp'));
	}

}
