<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="@yield('css')"/>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    </body>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
