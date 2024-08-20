@extends('layout/template')

@section('title', 'Prueba Tecnica KS2 | Productos')

@section ('contenido')

<main>
    <div class="container py-4">
        <h2>Lista de productos</h2>
        <a href="{{ url('productos/create')}}" class="btn btn-primary btn-sm">Nuevo Producto</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td><a href="{{url('productos/'. $producto->id.'/edit')}}" class="btn btn-info btn-sm">Editar</a>
                        <form action="{{url('productos/'. $producto->id)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Eliminar</button>
                        </form>
                        <!-- <a href="{{url('productos/'. $producto->id.'/ver')}}" class="btn btn-info btn-sm">Detalles</a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>