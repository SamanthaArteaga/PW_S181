@extends('layouts.plantilla')

@section ('titulo','Registro')

@section('contenido')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <h1 class="display-1 text-center text-warning mt-4"> Biblioteca </h1>

    <div class="container mt-5 col-md-6">
      <script>
        @if(session()->has('confirmacion'))
      
            Swal.fire({
            icon: 'success',
            title: 'Excelente',
            text: '{{ session('confirmacion') }}',
            });
      @endif
    </script>
        <div class="card text-center">
            <div class="card-header">
                Libromanía
            </div>
            <p>
            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">ISBN</label>
                        <input type="text" name="txtISBN" class="form-control" value="{{ old('txtISBN') }}">
                        {{ $errors->first('txtISBN')}}
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Titulo</label>
                        <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                        {{ $errors->first('txtTitulo')}}
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Autor</label>
                        <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor') }}" >
                        {{ $errors->first('txtAutor')}}
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Páginas</label>
                        <input type="text" name="txtPagina" class="form-control" value="{{ old('txtPagina') }}">
                        {{ $errors->first('txtPagina')}}
                    </div>
                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Editorial</label>
                        <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial') }}">
                        {{ $errors->first('txtEditorial')}}
                    </div>
                    <div class="col-md-12 text-center">
                        <label class="form-label">E-mail de Editorial</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" name="txtEmail" class="form-control" aria-describedby="inputGroupPrepend" >
                        </div>
                        {{ $errors->first('txtEmail')}}
                      </div>
            </div>

            <div class="card-footer text-body-secondary">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Guardar libro</button>
                </div>
            </div>
            </form>
        </div>
    </div>

 <br>
 <br>
@endsection