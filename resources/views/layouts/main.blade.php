<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog')</title>
    <!-- CSS stílus betöltése -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')
    <main>@yield('content')</main>
    @include('partials.footer')
</body>
</html>
