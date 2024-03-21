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
	@php
$stats = $status ?? "";
    if($stats == 404){
        echo "<script>window.alert('Akun Tidak Ditemukan')</script>";
    }
    if($stats == 403){
        echo "<script>window.alert('Username atau Password Salah')</script>";
    }
    if (Session::get('status') == 400) {
        echo "<script>window.alert('Akun berhasil dibuat')</script>";
    }
@endphp
	<div class="jumbotron">
        <ul class="nav nav-tabs container justify-content-center">
            <li id="navbar"><a href="/" id="navbar">Beranda</a></li>
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
						<button style="float: right;" type="submit" class="btn btn-primary">LOGIN</button>
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

