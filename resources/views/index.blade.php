
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('style/grid.css')}}" type="text/css">

    <style type="text/css">
        body{
            background-color: #f5f5f5;
        }
        .tengah{
            float: center;
            text-align: center;
            padding-bottom: 3%;
            padding-top: 3%; 
            color:#FF4495;
        }
        h3 {
            margin: 0 0 10px 0;
            font-size: 48px;
            font-weight: 700;
            line-height: 56px;
            color: color:#FF4495;
        }
        
    </style>
</head>
<body>
    <x-navbarIndex/>
    <x-hero/>
        <div class="jumbotron">
            <div class="tengah">
                <h3>GALERI FOTO </h3>
            </div>
        </div>
        <div class="ms-3 me-3 mt-3">
            <section class="flex" id="photos">
            @foreach ($foto as $a)
            <a class="text-decoration-none" href="detail/{{$a['id']}}">
                <div class="overflow-y-hidden">
                  <img src="@php
                echo asset($a['lokasi_file']);
              @endphp" class="img-fluid border" alt="..." style="border-radius: 25px">
              <h6 class="text-truncate text-dark fw-bold ps-2"></h6>
                </div>
              </a>
            @endforeach
            </section>
        </div> 
</body>
</html>