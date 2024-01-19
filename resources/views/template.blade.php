<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}  - @yield('judul')</title>
</head>
<body>
    <header>
        <nav>
            <li><a href="/home1">HOME</a></li>
            <li><a href="about1">ABOUT</a></li>
        </nav>
    </header>

    @yield('content')
    
    <footer>
        <p>Copyright Nabila Zalfa Anandita - 2024</p>
    </footer>
</body>
</html>