<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryIzinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_lahan_postizins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nik', 16);
			$table->string('nama');
			$table->string('email');
			$table->string('pekerjaan');
			$table->string('atas_nama');
			$table->string('alamat');
			$table->string('jenis_izin');
			$table->string('alamat_tujuan');
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
		Schema::drop('ppl_lahan_postizins');
	}

}
