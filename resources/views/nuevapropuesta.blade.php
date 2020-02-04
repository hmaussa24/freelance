@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completa tu perfil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/enviar-propuesta/{{$id}}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Titulo del la propuesta</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Titulo">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Describe tu la propuesta</label>
                        <textarea class="form-control" name="descripcion" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Presupuesto</label>
                        <input type="number" class="form-control" name="presupuesto" placeholder="1000000">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                      </div>
                                

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
