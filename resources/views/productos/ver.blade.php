@extends('layout/template')

@section('title', 'Prueba Tecnica KS2 | Editar Productos')

@section ('contenido')
<main>
    <div class="container py-4">
        <h2>Editar Producto</h2>
        @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ url('productos/'.$producto->id)}}" method="post">
            @method("PUT")
            @csrf
            <div class="mb-r row">
                <label for="" class="col-sm-2 col-form-label">Nombre del producto</label>
                <div class="col-sm-5">
                    <input type="text" name="nombre_producto" id="nombre_producto" class="form-control"
                        value="{{ $producto->nombre}}" required disable>
                </div>
            </div>
            <br>
            <div class="mb-r row">
                <label for="" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-5">
                    <input type="text" name="descripcion_producto" id="descripcion_producto" class="form-control"
                        value="{{ $producto->descripcion}}" required disable>
                </div>
            </div>
            <br>
            <div class="mb-r row">
                <label for="precio_producto" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-5">
                    <input type="text" name="precio_producto" id="precio_producto" class="form-control"
                        value="{{ $producto->precio}}" required disable>
                </div>
            </div>
            <a href="{{url('productos')}}" class="btn btn-info btn-sm">Regresar</a>
        </form>
    </div>
</main>