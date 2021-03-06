<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css') 
    <!-- questo yeld qui sopra serve per i fantawesome della pagina dettagli.blade.php -->
    <title>@yield('title','default')</title>
</head>
<body>
    @include('partials.header')

    <main>@yield('content')</main>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>