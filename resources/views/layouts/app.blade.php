<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @yield('header')
    </head>
    <body>
        @yield('content')
    </body>
</html>
