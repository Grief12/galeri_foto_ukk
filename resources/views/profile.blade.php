<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            color:#ffffff
        }
        #floatingButton {
            position: fixed;
            bottom: 20px;
            right: 20px; 
            padding: 10px 20px;
            background-color: #007bff; 
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }
        #floatingButton2 {
            position: fixed;
            bottom: 80px;
            right: 20px; 
            padding: 10px 20px;
            background-color: #007bff; 
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }
        .tengah{
            float: center;
            padding-top: 5%;
			      margin-left: 5%;
			      margin-right: 5%;
            color:#ffffff
        }
    </style>
</head>
<body>
     <x-navbar/>
     <x-modalUnggah/>
      {{-- Modal  --}}
      <div class="modal fade" id="uploadgambar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <form action="/uploadgambar" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Posting Foto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
              <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input class="form-control" type="text" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile" name="foto">
              </div>              
              <label for="AlbumName">Pilih Album</label>
              <select name="AlbumName" class="form-select">
                @foreach ($album as $a)
                  <option value="{{ $a['nama_album'] }}!!!{{ $a['id'] }}">@php
                    echo explode("@", $a['nama_album'])[0];
                  @endphp 
                  </option>
                @endforeach
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn text-light" style="background-color: black" value="Posting">
            </form>
            </div>
          </div>
        </div>
      </div>
      {{-- end modal  --}}
    
    {{--Card Profile --}}
    <div class="container py-5 h-100">
      <div class="row d-flex flex-row justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-12">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="assets/logo.png" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width:150px; z-index:1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">Edit Profile</button>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
            <h5>{{$akun->username}}</h5>
            <p>{{$akun->email}}</p>
            </div>
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5"></p>
                  <p class="small text-muted mb-0"></p>
                </div>
                <div class="px-3">
                  <p class="mb-1 h5"></p>
                  <p class="small text-muted mb-0"></p>
                </div>
                <div>
                  <p class="mb-1 h5"></p>
                  <p class="small text-muted mb-0"></p>
                </div>
              </div>
            </div>
            <div class="card-body p-4 text-black">
              <div class="d-flex align-items-center mb-4">
                {{-- <p class="lead fw-normal mb-0">My Album</p> --}}
                  @foreach ($album as $a)
                <div class="container card col-2 m-1 text-center m-2">
                  <a class="text-decoration-none " href="album/{{ $a['id'] }}" style="color: black">
                    <div class="card-img-top mt-4">
                      <img src="assets/logo.png" width="75px" style="margin-bottom:5px;" />
                    </div>
                    <div class="card-body container text-truncate">
                      @php
                    echo explode("@", $a['nama_album'])[0];
                    @endphp
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{--End Card Profile--}}
    <div class="jumbotron">
      <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="floatingButton">
        Buat album
      </button>
      <button type="button" data-bs-toggle="modal" data-bs-target="#uploadgambar" id="floatingButton2">
        Posting Foto
      </button>
    </div>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
	</script>
</body>
</html>