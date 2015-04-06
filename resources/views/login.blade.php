@extends ('layout')

@section ('content')

	<script>
  		var d=document.getElementById("loginLink");
  		d.className = d.className + " active";
	</script>

	<br>
	<div class="row">
		<div class="col-xs-4 col-sm-offset-4">
	       <form class="form-signin" action="login.php" method="POST">
              
              <h5 class="form-signin-heading">Log-in untuk mengajukan permohonan izin</h5>
              <label for="nama_user" class="sr-only">Email address</label>
              <input type="text" id="nama_user" class="form-control" placeholder="Username" required autofocus>
              <label for="password_user" class="sr-only">Password</label>
              <input type="password" id="password_user" class="form-control" placeholder="Password" required>
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