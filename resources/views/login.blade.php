@extends ('layout')

@section ('content')

	<script>
  		var d=document.getElementById("loginLink");
  		d.className = d.className + " active";
	</script>

	<br>
	<div class="row">
		<div class="col-xs-4 col-sm-offset-4">
	       <form class="form-signin" action="login" method="POST">
	       <input type="hidden" name="_token" value="{{ csrf_token() }}">
              
              <h5 class="form-signin-heading">Log-in untuk mengajukan permohonan izin</h5>

              <label for="nik" class="sr-only">Nomor Induk Kependudukan</label>
              <input type="text" id="nik" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" required autofocus>

              <label for="password" class="sr-only">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              
              <div class="checkbox">
                <label style="font-size: 140%">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>

              <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>

            </form> 
        </div>
    </div>

    <br>
    <br>
@stop