@extends('layouts.app')

@section('title', 'Inventario')

@section('subtitle', 'Lista de productos con stock bajo')

@section('content')
    <table class="table text-center table-dark">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Stock del inventario</th>
            <th scope="col">Stock del producto</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($stockBajo as $item)
                <tr>
                    <td>{{$item->codigo}}</td>
                    <th>{{$item->nombre}}</th>
                    <td>{{$item->stock}}</td>
                    <td>{{$item->stock}}</td>
                    <td><a href="" class="btn btn-warning">Editar</a></td>
                    <td>
                    <form action="" method="POST">
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