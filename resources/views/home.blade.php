<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style type="text/css">
        body{
        background: url('assets/bg.jpg');
		    color: #4d4b4b;
        }
        .tengah{
            float: center;
            text-align: center;
            padding-top: 3%;
            color:#ffffff
        }
        #search{
            margin-top: 1%;
            padding: 1% 25%;
            border: 1px solid #dbdbdb;
        }
        #navbar{
            text-decoration: none;
            color:#ffffff;
            margin: 3%;
            display: block;
        }
    </style>
</head>
<body>
     {{-- <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: black;">
        <div class="container-fluid ">
          <a class="navbar-brand" href="/home">
            <img src="assets/logo.png" alt="" width="50" height="50">
            BSocial
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Album</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn btn-outline-success" type="submit">PROFILE</button>
              <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
            </form>
          </div>
        </div>
      </nav>
    <!-- end of navbar --> --}}
    <div class="jumbotron">
      <ul class="nav nav-tabs container justify-content-center">
          <li id="navbar"><a href="/home" id="navbar">Home</a></li>
          <li id="navbar"><a href="#" id="navbar">Profile</a></li>
          <li id="navbar"><a href="/logout" id="navbar">Logout</a></li>
      </ul>
      <div class="tengah">
          <h2>GALLERY PHOTO <br></h2>
          <input id="search" type="text" name="search" placeholder="search all what your likes">
          <button type="button" class="btn btn-dark">Cari</button>
      </div>
  </div>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>