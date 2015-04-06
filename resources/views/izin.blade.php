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
					    <form method="post" action="izin-2.html">
					    	<div>
						     	<span>Nomor Induk Kependudukan</span>
						    	<span><input type="text" class="form-control" id="noktp"></span>
						    </div>
					    	<div>
						     	<span>Nama Lengkap</span>
						    	<span><input type="text" class="form-control" id="number"></span>
						    </div>
						    <div>
						     	<span>Pekerjaan</span>
						    	<span><input type="text" class="form-control" id="number"></span>
						    </div>
						    <div>
						     	<span>Bertindak untuk / atas nama</span>
						    	<span><input type="text" class="form-control" id="number"></span>
						    </div>
						    <div>
						     	<span>Dengan ini saya mengajukan permohonan izin</span>
						     	<div class="checkbox" style="font-size:120%">
						     		<label>
						     			<input type="checkbox" value="">
						     			Pembuatan/Pelebaran *) Jalan Masuk Pekarangan
						     		</label>
						     	</div>
						     	<div class="checkbox" style="font-size:120%">
						     		<label>
						     			<input type="checkbox" value="">
						     			Penutupan/Penggunaan Trotoar/Berm/Saluran *(
						     		</label>
						     	</div>
						     	<div class="checkbox" style="font-size:120%">
						     		<label>
						     			<input type="checkbox" value="">
						     			Pemancangan Tiang Reklame/JPO/Bando dan Sejenisnya
						     		</label>
						     	</div>
						     	<div class="checkbox" style="font-size:120%">
						     		<label>
						     			<input type="checkbox" value="">
						     			Pematangan Tanah /Lahan
						     		</label>
						     	</div>
						     	<div class="checkbox" style="font-size:120%">
						     		<label>
						     			<input type="checkbox" value="">
						     			Penggalian Pada Ruang Milik Jalan (RUMIJA)
						     		</label>
						     	</div>
						    </div>
						  	<div>
						     	<span>Alamat</span>
						    	<span><input type="text" class="form-control" id="number"></span>
						    </div>
						    <div>
						     	<span>Kelurahan</span>
						    	<span><input type="text" class="form-control" id="number"></span>
						    </div>
						    <div>
						     	<span>Kecamatan</span>
						    	<span><input type="text" class="form-control" id="number"></span>
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