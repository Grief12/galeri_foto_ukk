<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('style/navbar.css')}}" type="text/css">
    <title>Document</title>
</head>
<body>
    <header class="sticky-top">
        <img src="{{asset('assets/logo.png')}}" alt="logo" height="60px">
        <nav>
            <ul class="nav__links" id="navLinks">
                <li><a href="/home">Beranda</a></li>
                <li><a href="/search">Cari</a></li>
                <li><a href="/profile">Profil</a></li>
                
            </ul>
        </nav>
        <a href="/logout" class="cta"><button>Keluar</button></button></a>
    </header> 
</body>
</html>
   