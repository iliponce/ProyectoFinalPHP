<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto - Reporte</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="card body">
            
        <h1 class="display-8 fw-bold">Proyectos de Gobierno</h1>
        <h3 class="display-10 fw-bold">Fondo Nacional de Vivienda Popular (FONAVIPO)</h3>

        <p align="right"><span class="pull-right">Fecha de reporte: </span>{{ $mytime = Carbon\Carbon::now()->format('d/m/Y h:i:s a '); }}</p>
        <!-- date('d/m/Y h:i:s a', time()); también se puede usar -->
        <h6>A continuación listado de proyectos relacionados a la institución en el que se puede apreciar los datos generales de éstos.</h6>
        <br />
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Proyecto</th>
                <th scope="col">Fuente de Fondos</th>
                <th scope="col">Planificado</th>
                <th scope="col">Patrocinado</th>
                <th scope="col">Fondo Propio</th>
                <th scope="col">Creado</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach($proyectos as $proy)
            <tr>
                <th scope="row">{{$proy->id}}</th>
                <td>{{ $proy->nombreProyecto }}</td>
                <td>{{ $proy->fuenteFondos }}</td>
                <td>${{ number_format($proy->montoPlanificado) }}</td>
                <td>${{ number_format($proy->montoPatrocinado) }}</td>
                <td>${{ number_format($proy->montoFondosPropios) }}</td>
                <td>{{ $proy->fecha_creado->format('d/m/Y') }}</td>
            </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>