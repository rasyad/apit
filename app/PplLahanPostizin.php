<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PplLahanPostizin extends Eloquent {
	
	/**
	 * Fillable fields for a PostIzin.
	 * 
	 * @var array
	 */
	protected $fillable = [
		'nik', 'nama', 'email', 'pekerjaan', 'atas_nama', 'alamat', 'jenis_izin', 'alamat_tujuan'
	];
}
