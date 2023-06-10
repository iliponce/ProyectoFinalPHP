<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto - @yield('titulo') </title>

    @vite(['resources/js/app.js'])

</head>
<body>
@section('navbar')    

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/proyectos/listar">Lista de Proyectos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/proyectos/reporte">Reporte</a>
  </li>

</ul>


  @show

  <div class= "container">
    <div class= "card mb-4 rounded-3 shadow-sm">
        @yield('contenido')
    </div>
</div>

</body>
</html>