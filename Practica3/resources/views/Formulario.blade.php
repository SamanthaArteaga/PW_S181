@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
    <h1 class="display-1 text-center text-danger mt-4"> FORM </h1>
    
   {{--  <x-alert>
        <p>Esto es un texto de prueba para la vista de Formulario</p>
    </x-alert>  --}}

    <div class="container mt-5 col-md-6">
        @if (session()->has('confirmacion'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session('confirmacion') }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
         
        @endif

        @if ($errors->any())
          @foreach ($errors->all() as $error)
          
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{ $error }} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endforeach
        @endif






        <div class="card">
            <div class="card-header fs-4 fw-medium text-primary text-center">
            Introduce aquí tus memorias
            </div>

            <div class="card-body">
                <form method="POST" action="guardarRecuerdo">
                    
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo') }}" >
                        {{ $errors->first('txtTitulo') }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdos: </label>
                        <input type="text" name="txtRecuerdo" class="form-control" value="{{old('txtRecuerdo') }}">
                        {{ $errors->first('txtRecuerdo') }}
                    </div>


            </div>

            <div class="card-footer text-body-secondary">
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Guardar Recuerdo</button>
                </form>
            </div>
        </div>{{-- Cierre del Card --}}
    </div>{{-- Cierre del Container --}}

@endsection