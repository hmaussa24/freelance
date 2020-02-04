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

                    <form method="POST" action="/enviar-perfil" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Foto</label>
                        <input type="file" name="foto" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Sobre ti</label>
                        <textarea class="form-control" name="sti" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Experiencia laboral</label>
                        <textarea class="form-control" name="experiencia" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Describe tus habilidades</label>
                        <textarea class="form-control" name="habilidades" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                      </div>
                                

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
