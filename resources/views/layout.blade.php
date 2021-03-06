<!DOCTYPE HTML>
<html>
<head>
	<title>APIT: Aplikasi Izin Terkait Lahan</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 	<!--[if lt IE 9]>
     	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--  webfonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!-- // webfonts  -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- start plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html"><img src="images/logoBandung.png" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li id="homepageLink"><a href="./">home</a></li>
		        <li id="izinLink"><a href="./izin">pengajuan izin</a></li>
		        <li id="statusIzinLink"><a href="./statusizin">status perizinan</a></li>
		        <li id="aboutLink"><a href="./about">about</a></li>
		        @if (Auth::guest())
			      		<li id="loginLink"> <a href="{{url('login')}}">Login</a></li>
			        @else
			        	<h3>{{Auth::user()->nama}}</h3>
			        	<li id="logoutLink"> <a href="{{url('logout')}}")>Logout</a></li>
						<script type="text/javascript">
							$('#logoutLink').click(function(e) {
								$.ajax({
									type: 'get',
									url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
									success: function(data) {
									},
									error: function(data) {
										// alert(data);
									}
								});
							})
						</script>
			        @endif
		      </ul>
		      <form class="navbar-form navbar-right" role="search">
		        <div class="form-group my_search">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<ol class="breadcrumb">
		  <!-- li><a href="index.html">Home</a></li>
		  <li class="active">pengajuan izin</li -->
		</ol>
			
	</div>
</div>
<div class="main"><!-- start main -->

	@yield('content')

</div>

<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; APIT Lahan Kota Bandung | Design by&nbsp;<a href="http://w3layouts.com/"> G11-K01</a></span></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>