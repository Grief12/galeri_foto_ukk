<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('style/grid.css')}}" type="text/css">
    <style type="text/css">
        body{
          background: url('assets/bg.jpg');
		      color: #4d4b4b;
        }
        .tengah{
            float: center;
            text-align: center;
            padding-top: 3%;
            color: #ffffff;
        }
        #search{
            margin-top: 1%;
            padding: 1% 25%;
            border: 1px solid #dbdbdb;
        }
    </style>
</head>
<body>
  <x-navbar/>
  <div class="jumbotron">
    <div class="tengah">
        <form action="{{route('cari')}}" method="POST">
          @csrf
          <input id="search" type="text" name="keyword" placeholder="Masukkan Kata Kunci...">
          <button type="submit" class="btn btn-dark">Cari</button>
        </form>
    </div>
  </div>
  <div class="ms-3 me-3 mt-3">
    <section class="flex" id="photos">
    @if (isset($hasil))
    @foreach ($hasil as $a)
    <a class="text-decoration-none" href="detail/{{$a['id']}}">
      <div class="overflow-y-hidden">
        <img src="@php
      echo asset($a['lokasi_file']);
    @endphp" class="img-fluid border" alt="..." style="border-radius: 25px">
    <h6 class="text-truncate text-dark fw-bold ps-2"></h6>
      </div>
    </a>
  @endforeach
    @endif
    </section>
  </div>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>