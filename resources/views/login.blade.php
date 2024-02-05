<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>

	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" type="text/css">

	<style>	
		body {
		    font-family: Georgia, times new roman, Times, Merriweather, Cambria, Times, serif;
		    font-weight: 300;
		    font-size: 16px;
		    line-height: 2;
		    background: url('assets/bg.jpg') no-repeat center;
		    color: #4d4b4b;
		}
		.centerDiv {
			height: 100vh;
			width: 100%;
		}
		.forminput{
			margin: 10% 20% 0 25%
		}
		#navbar{
			text-decoration: none;
			color: #ffffff;
		}
	</style>	
</head>
<body>
	<div class="container-fluid">	
		<div class="row centerDiv">
			<div class="col-sm-12 my-auto">
				<div class="card border-0 ">
				  <div class="row">
				    <div class="col-md-8">
						<div class="container-fluid carousel-contain py-5">
							<div class="container">
							 <div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
							   <div class="carousel-indicators">
								 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
								 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
							   </div>
							   <div class="carousel-inner">
								 <div class="carousel-item active">
								   <img src="assets/background.jpg" class="d-block w-100" alt="...">
								 </div>
								 <div class="carousel-item">
								   <img src="assets/bg.jpg" class="d-block w-100" alt="...">
								 </div>
								 <div class="carousel-item">
								   <img src="assets/wp.jpeg" class="d-block w-100" alt="...">
								 </div>
							   </div>
							   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
								 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								 <span class="visually-hidden">Previous</span>
							   </button>
							   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
								 <span class="carousel-control-next-icon" aria-hidden="true"></span>
								 <span class="visually-hidden">Next</span>
							   </button>
							 </div>
							</div>
							</div>
				    </div>
				    <div class="col-md-4">
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
								<div >Belum punya akun? <a href="/daftar">Register</a></div>
								</div>	
			      		</form>
				      </div>
				    </div>
				  </div>
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