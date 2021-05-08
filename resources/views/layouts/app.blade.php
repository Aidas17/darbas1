<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    @guest
        <a href="{{route('login')}}">Prisijungti</a>
        <a href="{{route('register')}}">Prisiregistruoti</a>
    @endguest
    @auth
        <form action="{{route('logout')}}" method="post">
            @csrf
            <label for="">Prisijunges <strong>{{Auth()->User()->name}}</strong></label>
            <input type="submit" value="Logout">
        </form>
    @endauth
    <h1><a href="{{route('home')}}">Pavadinimas</a></h1>
    @yield("main")
</body>
</html>