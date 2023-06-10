@extends('../layout/app')
@section('titulo','Inicio')

@section('navbar')
    @parent
@stop

@section('contenido')

<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Proyectos de Gobierno</h1>
      <h3 class="display-12 fw-bold">FONAVIPO - Fondo Nacional de Vivienda Popular</h3>
      <p class="col-md-8 fs-4">Esta web ha sido diseñada por Iliana de Alegre para albergar los proyectos de Gobierno, agradecemos su visita.</p>
       <a href="{{ route('proyectos/listar')}}" class="btn btn-primary btn-lg">Ver Proyectos</a> 
    </div>
  </div>
  @endsection