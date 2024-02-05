<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" type="text/css">

	<style>	
		body{
            background: url('assets/bg.jpg');
		    color: #4d4b4b;
        }
        #navbar{
            text-decoration: none;
            color:#ffffff;
            margin: 3%;
            display: block;
        }
        .tengah{
            float: center;
            text-align: center;
            padding-top: 5%;
			margin-left: 20%;
			margin-right: 20%;
            color:#ffffff
        }
		.card { 
            box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2); 
            border-radius: 5px; 
            backdrop-filter: blur(14px); 
            background-color: rgba(0, 0, 0, 0.74); 
            padding: 10px; 
            text-align: center; 
        } 
	</style>	
</head>
<body>
	{{-- <div class="container-fluid">	
		<div class="row centerDiv">
			<div class="col-sm-12 my-auto">
				<div class="card border-0 ">
				  <div class="row">
				    <div class="col-md-8">
				      <div class="card-body">
				      	<div class="mb-3 text-center">
				      		<img src="assets/logo.png" class="img-fluid" width="70">
				      		<h2 class="h5 mt-3">Login</h2>
				      	</div>
			      		<form method="POST" action="">
							@csrf
			      		  <div class="mb-3">
			      		    <input type="text" class="form-control" name="username" id="username">
			      		    Masukkan username
			      		  </div>
			      		  <div class="mb-3">
			      		    <input type="password" class="form-control" name="password" id="password">
			      		     Masukkan password
			      		  </div>
			      		  <button type="submit" class="btn btn-primary w-100" value="Login">Login</button>
							<div class="mb-3">
								<div >Belum punya akun? <a href="/register">Register</a></div>
								</div>	
			      		</form>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div> --}}
	<div class="jumbotron">
        <ul class="nav nav-tabs container justify-content-center">
            <li id="navbar"><a href="/" id="navbar">Home</a></li>
            <li id="navbar"><a href="/login" id="navbar">Masuk</a></li>
            <li id="navbar"><a href="/register" id="navbar">Daftar</a></li>
        </ul>
        <div class="tengah">
			<div class="card">
				<div class="card-body ">
					<h2>Login</h2>
					<form class="forminput" method="POST" action="">
						{{ csrf_field() }}
						<br><br>
						<div class="row mb-3">
							<label for="username" class="col-sm-2 col-forn-label" style="color: #ffffff;">Username</label>
							<div class="col-sm-10">
								<input name="username" type="text" class="form-control" id="inputUsername">
							</div>
						</div>
						<div class="row mb-3">
							<label for="password" class="col-sm-2 col-forn-label" style="color: #ffffff;">Password</label>
							<div class="col-sm-10">
								<input name="password" type="password" class="form-control" id="inputPassword">
							</div>
						</div>
						<button style="float: right;" type="submit" class="btn btn-dark">LOGIN</button>
					</form>
				</div>
			</div>
        </div>
    </div>

	<!-- JavaScript -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>

@php
	$stats = $status ?? "";
		if ($stats == 404) {
			# code...
			echo"<scipt>window.alert('Akun Tidak Ditemukan')</scipt>";
		}
		if ($stats == 403) {
			# code...
			echo"<script>window.alert('Username atau Password salah')</script>";
		}
		if (Session::get('status') == 400) {
			# code...
			echo"<script>window.alert('Akun Berhasil Dibuat')</script>";
		}
@endphp