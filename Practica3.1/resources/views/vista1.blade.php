@extends('layouts.plantilla')

@section('titulo','Inicio')

@section('contenido')

<h1 class="display-1 text-center text-danger"> Vista 1 </h1>

<x-card></x-card>

<x-mensaje mensaje="Este es el Vista 1" fecha="11/10/2023"></x-mensaje>

@endsection