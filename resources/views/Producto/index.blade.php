@extends('layouts.app')

@section('title', 'Productos')

@section('subtitle', 'Lista de productos')

@section('content')
    <div class="col-md-12 text-end mb-4">
        <a class="btn btn-info" href="{{route('inventario.index')}}"> Inventario </a>
        <a class="btn btn-success" href="{{route('producto.create')}}"> Crear Producto </a>
    </div>
    <table class="table text-center table-dark">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
                <tr>
                    <th>{{$item->codigo}}</th>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->stock}}</td>
                    <td><a href="{{route('producto.edit', $item->id)}}" class="btn btn-warning">Editar</a></td>
                <td>
                    <form action="{{ route('producto.destroy', $item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection