<html>
    <head>
        <title>Academia - @yield('titulo')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
{{--@yield nos permitirá llamar esta parte de la plantilla en otras vistas--}}
    <body>
<nav class="navbar navbar-expand-lg navbar-black bg-light fixed-top">
    <a href="" class="navbar-brand"><img src="./logo.png" alt="" width="100" height="70"></a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active mx-3"><a href="/cursos/create">Crear Curso</a></li>
        <li class="nav-item active mx-3"><a href="#">Sobre Nosotros</a></li>
    </ul>
</nav>
<br><br>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
