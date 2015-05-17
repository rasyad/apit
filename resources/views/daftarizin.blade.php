@extends ('layout')

@section ('content')

	<script>
  		var d=document.getElementById("statusIzinLink");
  		d.className = d.className + " active";
	</script>

	<br>
	<div class="container">
	<div class="col-md-12">
          <!--<h1 class="page-header">Dashboard</h1>-->
        <h2 class="sub-header">Daftar Perizinan</h2>
          	<div class="table-responsive">
            <table class="table table-striped">

             <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Pekerjaan</th>
                  <th>Atas Nama</th>
                  <th>Alamat Pemohon</th>
                  <th>Jenis Izin</th>
                  <th>Alamat Tujuan</th>
                </tr>
             </thead>
             <tbody>
             	<tr>
             		@foreach($ppl_lahan_postizins as $daftarizin)
                <td>{{ $daftarizin->id }}</td>
            		<td>{{ $daftarizin->nik }}</td>
            		<td>{{ $daftarizin->nama }}</td>
            		<td>{{ $daftarizin->email }}</td>
            		<td>{{ $daftarizin->pekerjaan }}</td>
            		<td>{{ $daftarizin->atas_nama }}</td>
            		<td>{{ $daftarizin->alamat }}</td>
            		<td>{{ $daftarizin->jenis_izin }}</td>
            		<td>{{ $daftarizin->alamat_tujuan }}</td>
            	</tr>
             	@endforeach
             </tbody>

            			
            </table>
          	</div>
    </div>
    </div>


@stop