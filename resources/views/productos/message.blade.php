@extends('layout/template')

@section('title', 'Prueba Tecnica KS2 | Mensaje Productos')

@section ('contenido')

<main>
    <div class="container py-4">
        <h2>{{ $msg }}</h2>
        <a href="{{url('productos')}}" class="btn btn-info">Regresar</a>
    </div>
</main>