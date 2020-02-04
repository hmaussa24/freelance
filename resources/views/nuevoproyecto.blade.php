@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar un nuevo proyecto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/nuevo-proyecto">
                        @csrf
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Titulo del proyecto</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Titulo">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Describe tu proyecto</label>
                        <textarea class="form-control" name="descripcion" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">¿Describe que necesitas que hagan?</label>
                        <textarea class="form-control" name="contexto" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">¿Requisitos del FREELANCE?</label>
                        <textarea class="form-control" name="requisitos" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Presupuesto</label>
                        <input type="number" class="form-control" name="presupuesto" placeholder="1000000">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tienes una fecha de entrega?</label>
                        <input type="text" class="form-control" name="fecha-entrega" placeholder="">
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
