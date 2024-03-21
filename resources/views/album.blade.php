<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" type="text/css">
    <style type="text/css">
       body{
        background: url('{{asset('assets/bg.jpg')}}');
		    color: #4d4b4b;
        }
        .tengah{
            float: center;
            text-align: center;
            padding-top: 3%;
            color:#ffffff
        }
        .card{
          margin-bottom: 5px;
        }
    </style>
</head>
<body>
  <x-navbar/>
    <div class="row m-2 mt-3 ms-3">
      <div class="row">
        <div class="border-bottom border-3 border-light mb-3 pb-2 pt-2" style="width: 80%">
          <div class="d-flex justify-content-between align-items-center">
                <h2 style="color: #ffffff">{{ $nama_album }}</h2>
          </div>
        </div>
            <div class="row">
                @foreach ($detailfoto as $a)
                <div class="col-md-3 grid-item">
                  <div class="card" style="border-radius: 25px">
                    <div class="overflow-y-hidden">
                      <img src="@php
                    echo asset($a['lokasi_file']);
                    @endphp" class="img-fluid border" alt="..." style="border-radius: 25px">
                  <h6 class="text-truncate text-dark fw-bold ps-2"></h6>
                    </div>
                    <div class="card-body">
                       <h5 class="card-title">{{$a['deskripsi']}}</h5>
                       <p class="card-text text-truncate">{{$a['created_at']->format('H:i')}}-{{$a['created_at']->format('d F Y')}}</p>
                        <form action="{{route('hapusFoto',['id'=>$a['id']])}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm ">Hapus</button>
                        </form>
                    </div>
                    <p></p>
                 </div>
                </div>
              @endforeach
            </div>
      </div>
    </div>
 
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>