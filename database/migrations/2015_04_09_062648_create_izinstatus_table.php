<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzinstatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_lahan_izinstatus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('izin');
			$table->date('tanggal_daftar');
			$table->date('tanggal_selesai');
			$table->string('nama_pemohon');
			$table->string('alamat_pemohon');
			$table->string('lokasi');
			$table->string('keterangan');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ppl_lahan_izinstatus');
	}

}
