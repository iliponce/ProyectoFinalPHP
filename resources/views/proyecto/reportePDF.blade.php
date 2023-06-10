<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 PDF</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Lista de productos</h2>
            </div>
            <div class="col-md-4">
                <div class="mb-4 d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ URL::to('#') }}">Convertir a PDF</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>