@extends ('layout')

@section ('content')

	<script>
  		var d=document.getElementById("izinLink");
  		d.className = d.className + " active";
	</script>

	<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

	<br>

	<div class="container">
	
	<div class="col-md-8">
		<div class="row about">
			<div class="contact-form"><h2>Permohonan Izin</h2></div>

				<form method="POST" action="daftarizin">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="alert alert-success" style="font-size:150%">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<span class="sr-only">OK</span>
				Status kependudukan
				</div>

				<div class="alert alert-success" style="font-size:150%">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<span class="sr-only">OK</span>
				Lunas PBB Tahun Terakhir
				</div>

				<div class="alert alert-success" style="font-size:150%">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<span class="sr-only">OK</span>
				IPPT/IMB/Izin Lokasi
				</div>

				<span style="font-size:140%">Gambar situasi / Gambar Rencana Konstruksi</span>
				<input type="file" class="filestyle" data-size="sm"><br>

				<span style="font-size:140%">Surat Kepemilikan Tanah</span>
				<input type="file" class="filestyle" data-size="sm"><br>

				<span style="font-size:140%">Akte Badan Hukum (untuk Perusahaan/Koperasi)</span>
				<input type="file" class="filestyle" data-size="sm"><br>

				<span style="font-size:140%">Gambar Rencana / Rute Galian (untuk izin Rumija)</span>
				<input type="file" class="filestyle" data-size="sm"><br>

				<span style="font-size:140%">R A B Konstruksi (untuk izin Tiang Pamcang Reklame)</span>
				<input type="file" class="filestyle" data-size="sm"><br>


				<div class="contact-form">
					<span><input type="submit" value="Tahap Berikutnya"></span>
				</div>
				
				</form>
		</div>
  	</div>
</div>


		<br>
		<br>

@stop