<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" type="text/css">

    <style type="text/css">
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
    <div class="jumbotron">
        <ul class="nav nav-tabs container justify-content-center">
            <li id="navbar"><a href="/" id="navbar">Home</a></li>
            <li id="navbar"><a href="/login" id="navbar">Masuk</a></li>
            <li id="navbar"><a href="/register" id="navbar">Daftar</a></li>
        </ul>
        <div class="tengah">
            <div class="card">
				<h2>Register</h2>
				<form class="forminput" method="POST" action="">
					{{ csrf_field() }}
					<br><br>
                    <div class="row mb-3">
						<label for="inputUsername" class="col-sm-2 col-forn-label" style="color: #ffffff;">Username</label>
						<div class="col-sm-10">
							<input name="username" type="text" class="form-control" id="inputUsername">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputEmail3" class="col-sm-2 col-forn-label" style="color: #ffffff;">Email</label>
						<div class="col-sm-10">
							<input name="email" type="email" class="form-control" id="inputEmail">
						</div>
					</div>
					<div class="row mb-3">
						<label for="inputPassword3" class="col-sm-2 col-forn-label" style="color: #ffffff;">Password</label>
						<div class="col-sm-10">
							<input name="password" type="password" class="form-control" id="inputPassword">
						</div>
					</div>
					<button style="float: right;" type="submit" class="btn btn-primary">REGISTER</button>
				</form>
			</div>
        </div>
    </div>
</body>
</html>
@php
    $status = $status ?? "";
    if ($status == 401) {
        # code...
        echo"<script>window.alert('Username sudah digunakan')</script>";
    }
@endphp