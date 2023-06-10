<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('titulo')</title>

        
        
    </head>
    <body class="antialiased">

    <nav>
            <a href="principal">Principal</a>
            <a href="/alcaldia">Alcaldia</a>
            <a href="/departamento">Departamento</a>
            <a href="/aduana">Aduana</a>
     
        </nav>
        <h1>@yield('titulo')</h1>

        <hr>
        @yield('contenido')

</body>
</html>