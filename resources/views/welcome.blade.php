<!DOCTYPE html>
<!-- Designined by ALLOUI Abdelraouf -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Glassmorphism USTHB Academy </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo"><a href="{{ route('welcome') }}">USTHB ACADEMY></a></div>
                <div class="buttons">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </nav>
            <div class="content">
                <div class="text-content">
                    <h2>Learn To Enjoy,<br>Every Moment Of Your Life</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum facere in nam, officiis aspernatur consectetur
                    aliquid sequi possimus et. Sint.</p>
                </div>
                <div class="content__img">
                    <img src="{{ asset('img/usthb_logo.png') }}" alt="Logo">
                </div>
            </div>
        </header>
    </body>
</html>
