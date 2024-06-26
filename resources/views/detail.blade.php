<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('material_icon/like/material-normal/material.css')}}">
    <link rel="stylesheet" href="{{asset('material_icon/like/material-outlined/material-outlined.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}"  />
    <title>Detail</title>
    <style>
        body{
            background: url('{{asset('assets/bg.jpg')}}');
		      color: #4d4b4b;
        }
        .image-container{
            height: 250px;
        }
        .pointer-set:hover{
            cursor: pointer;
        }
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }

    </style>
</head>
<body>
    @if ($foto == false)
        <p>Foto Tidak Ada</p>
    @elseif ($foto != false)
    <div class="container py-5 h-100">
        <div class="card p-5">
            <div class="row">
                <div class="container col">
                <img src="@php 
                echo asset($foto['lokasi_file']);
                @endphp" class="img-fluid" alt="" >
                </div>
                <div class="container col">
                    <p class="fw-bold fs-4">{{$foto->pengguna->username}}</p>
                    <p class="fs-5">{{$foto['created_at']->format('H:i')}}-{{$foto['created_at']->format('d F Y')}}</p>
                    <p class="fs-6">{{$foto['deskripsi']}}</p>
                    @if (Session::get('id') != null && Session::get('username') != null)
                    <div class="row g-2">
                        <div class="col">
                            <label class="form-check-label">
                                @if ($ceklike == false)
                                <input type="checkbox" name="like" id="likeId" style="opacity: 0">
                                @elseif ($ceklike == true)
                                <input type="checkbox" name="like" id="likeId" style="opacity: 0" checked>
                                @endif
                                <div class="row g-1">
                                    @if ($ceklike == false)
                                        <div class="col pointer-set" onclick="changeIcon()">
                                            <i class="material-icons material-symbols-outlined" id="likE">favorite</i>
                                        </div>
                                    @elseif ($ceklike == true)
                                        <div class="col pointer-set" onclick="changeIcon()">
                                            <i class="material-icons" id="likE">favorite</i>
                                        </div>
                                    @endif
                                    <div class="col">
                                        <p id="likeCount">{{$foto->like_fotos->count()}}</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="col">
                            <h6 style="opacity: 0">zzz</h6>
                            <label class="form-check-label">
                                <a class="text-decoration-none text-dark" href="/download/{{$foto->id}}">
                                    <div class="row g-1">
                                        <div class="col">
                                            <i class="fas fa-solid fa-download"></i>
                                        </div>
                                        <div class="col">
                                            <p>Download</p>
                                        </div>
                                    </div>
                                </a>
                            </label>
                        </div>
                    </div>
                    <div class="container border-top border-2 overflow-auto" style="max-height: 450px" id="komenContainer">
                        @foreach ($foto->komentars as $a)
                            <p class="fs-6 fw-bold mt-3">{{$a->pengguna->username}}</p>
                            <p>{{$a->komentar}}</p>
                        @endforeach
                        </div>
                        <div class="row mt-5">
                            <input type="text" name="komentar" class="form-control col border border-dark me-1" id="fieldKomentar" placeholder="Komentar">
                            <button type="button" class="btn btn-dark col-3" onclick="sendKomentar()">Kirim</button>
                        </div>
                    @else
                    <div class="container border-top border-2 overflow-auto" style="max-height: 450px" id="komenContainer">
                        <center><h4>Harap login terlebih dahulu untuk fitur like,komentar,download</h4></center>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script>
        function changeIcon(){
            var element = document.getElementById("likE");
        if(element.classList.contains("material-symbols-outlined")){
            element.classList.remove("material-symbols-outlined");
        }
        else{
            element.classList.add("material-symbols-outlined");
        }
        }
        function sendKomentar(){
            var csrfToken = '{{ csrf_token() }}';
            var check_field = document.getElementById("fieldKomentar").value != '' ? true : false;
            var komenValue = document.getElementById("fieldKomentar").value;
            if(check_field == true){
                 $.ajax({
                 url: "{{route('addKomen.action', ['id' => $foto->id])}}", 
                 method: "POST",
                 data: {
                     _token: csrfToken,
                     komentar:  document.getElementById("fieldKomentar").value,
                 },
                 success: function(response){
                    console.log(response.message);
                    document.getElementById('fieldKomentar').value = '';
                    $('#komenContainer').append("<p class='fs-6 fw-bold mt-3'>{{Session::get('username')}}</p><p>"+komenValue+"</p>");
                 },
                 error: function(response){
                    console.log(response.message);
                 }
             });
            console.log('field berisi');
            } 
            else{
                console.log('field tidak boleh kosong');
            }
        }
    </script>
    <script>
        $("#likeId").change(function(){
            var csrfToken = '{{ csrf_token() }}';
            var isChecked = $(this).prop('checked');
            var likeCount = parseInt(document.getElementById("likeCount").textContent);

            if(isChecked == true) {
                document.getElementById("likeCount").textContent = likeCount +=1;
                $.ajax({
            url: "{{route('like.action', ['id' => $foto->id])}}",
            method: "POST",
            data: {
                _token: csrfToken,
                is_checked: isChecked,
            },
            success: function(response){
                console.log(response.message);
                console.log(isChecked);
            },
            error: function(xhr){
                console.log("gagal");
            }
        });
            }
            else {
                document.getElementById("likeCount").textContent = likeCount -=1;
                $.ajax({
            url: "{{route('unlike.action', ['id' => $foto->id])}}",
            method: "POST",
            data: {
                _method: "DELETE",
                _token: csrfToken,
                is_checked: isChecked,
            },
            success: function(response){
                console.log(response.message);
                console.log(isChecked);
            },
            error: function(xhr){
                console.log("gagal");
            }
        });
            }
        })
    </script>
</body>
</html>