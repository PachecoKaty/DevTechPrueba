@extends('layouts.app')

@section('title', 'Producto')

@section('subtitle', 'Editar producto')

@section('content')
    <form action="{{route('producto.update', $producto)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mt-2 mb-21">
                <label for=""> <strong> Codigo del producto </strong></label>
                <input type="text" name="codigo" class="form-control" value={{$producto->codigo}} required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for="producto_nombre"> <strong> Nombre </strong></label>
                <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}" required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for="producto_precio"> <strong> Precio </strong></label>
                <input type="number" name="precio" step="any" class="form-control" value="{{$producto->precio}}" required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for="producto_stock"> <strong> Stock </strong></label>
                <input type="number" name="stock" class="form-control" value="{{$producto->stock}}" required>
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <label for="producto_descripcion"> <strong> Descripción </strong></label>
                <textarea name="descripcion" rows="1" class="form-control">{{$producto->descripcion}}</textarea>
            </div>
            <div class="col-md-12 mt-4 mb-1">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </div>
    </form>
@endsection