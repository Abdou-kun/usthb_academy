<!DOCTYPE html>
<!-- Designined by ALLOUI Abdelraouf -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title> {{ config('app.name', 'USTHB Academy') }} </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo"><a href="{{ route('welcome') }}">USTHB ACADEMY></a></div>
                @guest
                    <div class="buttons">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                @endguest

                @auth
                    <div class="buttons">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <a href='{{ route('logout')}}' onclick="event.preventDefault(); document.getElementById('form_logout').submit();">Log out</a>
                            <form id='form_logout'action='{{ route('logout') }}' style="display: none" method="POST">
                                @csrf
                            </form>
                    </div>
                @endauth
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
