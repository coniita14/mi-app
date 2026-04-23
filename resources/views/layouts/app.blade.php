<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Laboratorio')</title>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('contenido')
    </main>

    @include('partials.footer')

</body>
</html>