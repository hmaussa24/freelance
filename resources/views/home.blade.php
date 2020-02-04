@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($proyectos as $proyecto)
            <div class="card mb-3">
              <div class="card-body d-flex justify-content-between align-items-center card-header">
                        {{$proyecto->titulo}}
                        <div class="alert alert-info" role="alert"><h5>Presupuesto 
  {{$proyecto->presupuesto}}</h5>
</div>
                    </div>
              <div class="card-body">
                <p>{{$proyecto->descripcion}}</p>
                <p class="card-text">{{$proyecto->contexto}}</p>
                <a href="/nueva-propuesta/{{$proyecto->id}}" class="btn btn-primary">Enviar propuesta</a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
