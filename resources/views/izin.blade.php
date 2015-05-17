@extends ('layout')

@section ('content')

	<script>
  		var d=document.getElementById("izinLink");
  		d.className = d.className + " active";
	</script>

	<br>

	<div class="container">
	
	<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Permohonan Izin</h2>
					    <form method="POST" action="izin/post">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">

					    	<div>
						     	<span>Nomor Induk Kependudukan</span>
						    	<span><input type="text" class="form-control" id="nik" name="nik" placeholder="" readonly></span>

						    </div>
					    	<div>
						     	<span>Nama Lengkap</span>
						    	<span><input type="text" class="form-control" id="nama" name="nama"></span>
						    </div>
						    <div>
						     	<span>E-mail</span>
						    	<span><input type="text" class="form-control" id="email" name="email"></span>
						    </div>
						    <div>
						     	<span>Pekerjaan</span>
						    	<span><input type="text" class="form-control" id="pekerjaan" name="pekerjaan"></span>
						    </div>
						    <div>
						     	<span>Bertindak untuk / atas nama</span>
						    	<span><input type="text" class="form-control" id="atas_nama" name="atas_nama"></span>
						    </div>
						  	<div>
						     	<span>Alamat</span>
						    	<span><input type="text" class="form-control" id="alamat" name="alamat"></span>
						    </div>
						    <div>
						    	<span>Dengan ini saya mengajukan permohonan izin</span>
						    	<span> 
									<select class="form-control" id="jenis_izin" name="jenis_izin">
									  <option value="jmp_buat">Pembuatan Jalan Masuk Pekarangan</option>
									  <option value="jmp_lebar">Pelebaran Jalan Masuk Pekarangan</option>
									  <option value="tutup_trotoar">Penutupan Trotoar</option>
									  <option value="tutup_berm">Penutupan Berm</option>
									  <option value="tutup_saluran">Penutupan Saluran</option>
									  <option value="guna_trotoar">Penggunaan Trotoar</option>										  
									  <option value="guna_berm">Penggunaan Berm</option>	
									  <option value="guna_saluran">Penggunaan Saluran</option>
									  <option value="pancang">Pemancangan Tiang Reklame/JPO/Bando dan Sejenisnya</option>
									  <option value="pematangan">Pematangan Tanah /Lahan</option>
									  <option value="penggalian">Penggalian Pada Ruang Milik Jalan (RUMIJA)</option>
									</select> 
								</span>
						    </div>
						    <div>
						     	<span>Terletak di: (Alamat)</span>
						    	<span><input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan"></span>
						    </div>
						  

						   <div>
						   		<span><input type="submit" value="Tahap Berikutnya"></span>
						  </div>
					    </form>
				    </div>
  				</div>
		</div>
		<br>
		<br>

@stop