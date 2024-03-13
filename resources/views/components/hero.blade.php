<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/hero.css')}}" type="text/css">
    <title>Document</title>
</head>
<body>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>Selamat Datang</h1>
              <h2>Masuk untuk unggah,like,komen, dan download foto</h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="/login" class="btn-masuk scrollto">Masuk</a>
                <a href="/register" class="btn-daftar"><span>Daftar</span></a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/R-R.png" style="width: 500px" class="img-fluid animated">
            </div>
          </div>
        </div>
      </section>
</body>
</html>