<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | @WasLinSek</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{config('waslinsek.logo_url')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{config('waslinsek.logo_url')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{config('waslinsek.logo_url')}}" height='50' width='100' alt="BPKP log"></div>
								<p class="lead">Login to your account</p>
							</div>
                            <form class="form-auth-small" action="/login/postlogin" method="POST">
                             {{csrf_field()}}
								<div class="form-group">
									<label for="signin-username" class="control-label sr-only">Username</label>
									<div class="input-group item-required">
									<input name="name" type="string" class="form-control" id="signin-username" placeholder="Username">
									<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
								</div>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<div class="input-group item-required">
									<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
									<div class="input-group-addon">
									<i class="fa fa-lock"></i>
								</div>
								</div>	
								</div>
								<input type="checkbox" onclick="myFunction()"> Show Password 
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Pengawasan Program dan Kegiatan Prioritas RKP Tahun 2020</h1>
							<p>by Direktorat 2 PPKD BPKP</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<script>
function myFunction() {
  var x = document.getElementById("signin-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>

