<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style/navbar.css')}}" type="text/css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="{{asset('assets/logo.png')}}" alt="logo" height="60px">
        <nav>
            <ul class="nav__links">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="/profile">Profile</a></li>
                
            </ul>
        </nav>
        <a href="/logout" class="cta"><button>Logout</button></button></a>
</header>
</body>
</html>
   