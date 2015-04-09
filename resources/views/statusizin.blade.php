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
        <h2 class="sub-header">Status Perizinan</h2>
          	<div class="table-responsive">
            <table class="table table-striped">

             <thead>
                <tr>
                  <th>No. Pendaftaran</th>
                  <th>Izin</th>
                  <th>Tanggal Daftar</th>
                  <th>Tanggal Selesai</th>
                  <th>Nama Pemohon</th>
                  <th>Alamat Pemohon</th>
                  <th>Lokasi</th>
                  <th>Keterangan</th>
                </tr>
             </thead>
             <tbody>
             	<tr>
             		@foreach($izinstatus as $izinstatus_show)
            		<td>{{ $izinstatus_show->id }}</td>
            		<td>{{ $izinstatus_show->izin }}</td>
            		<td>{{ $izinstatus_show->tanggal_daftar }}</td>
            		<td>{{ $izinstatus_show->tanggal_selesai }}</td>
            		<td>{{ $izinstatus_show->nama_pemohon }}</td>
            		<td>{{ $izinstatus_show->alamat_pemohon }}</td>
            		<td>{{ $izinstatus_show->lokasi }}</td>
            		<td>{{ $izinstatus_show->keterangan }}</td>
            	</tr>
             	@endforeach
             </tbody>

            			
            </table>
          	</div>
    </div>
    </div>


@stop