
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
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
            color:#ffffff
        }
        #search{
            margin-top: 1%;
            padding: 1% 25%;
            border: 1px solid #dbdbdb;
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
            <h2>GALLERY PHOTO <br></h2>
            <input id="search" type="text" name="search" placeholder="search all what your likes">
            <button type="button" class="btn btn-dark">Cari</button>
        </div>
    </div>
    {{-- <div class="card-group">
    @foreach ($gambar as $g)
        <div class="card" style="width: 50rem; margin:2% 3% 3% 2%   ;">
            <img src="{{url('images/'.$g->file)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">{{$g->keterangan}}</small></p>
            </div>
        </div>
    @endforeach
    </div>  --}}
</body>
</html>