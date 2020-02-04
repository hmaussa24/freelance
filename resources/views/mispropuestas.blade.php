@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($propuestas as $propuesta)
            <div class="card mb-3">
              <div class="card-body d-flex justify-content-between align-items-center card-header">
                        {{$propuesta->titulo}}
                        <div class="alert alert-info" role="alert"><h5>Presupuesto 
  {{$propuesta->presupuesto}}</h5>
</div>
                    </div>
              <div class="card-body">
                <p>{{$propuesta->descripcion}}</p>
                <a href="#" class="btn btn-primary">VER</a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection