<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
      .banner{
        height: 80vh;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("assets/bg.jpg");
        background-size: cover;
        background-position: center;
      }
  
      .banner-content{
        height: 100%;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
      }
  
      .carousel-contain{
        background: url('assets/bg.jpg') no-repeat center;
        color: white;
      }
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: black;">
        <div class="container-fluid ">
          <a class="navbar-brand" href="/logout">
            {{-- <img src="assets/logo-modified.png" alt="" width="50" height="50"> --}}
            Logo
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- end of navbar -->
    

<!-- carousel -->
<div class="container-fluid carousel-contain py-5">
<div class="container">
 <h2 class="text-center mb-5">Home</h2>
 <div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="assets/wp.jpeg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Album 1</h5>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium obcaecati modi eaque tempora similique, commodi ullam doloribus officiis magni! Labore.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="assets/background.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Album 2</h5>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, dolor asperiores ipsam eveniet similique dolorem quasi totam exercitationem necessitatibus porro.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="assets/bg.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Album 3</h5>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora a sapiente aliquam aliquid veniam. Modi explicabo culpa necessitatibus inventore ab?</p>
       </div>
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
<!-- end of carousel -->

  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>