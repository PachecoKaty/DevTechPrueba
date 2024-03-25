@extends('layouts.app')

@section('title', 'Producto')

@section('subtitle', 'Crear producto')

@section('content')
    <form action="{{route('producto.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 mt-2 mb-21">
                <label for=""> <strong> Codigo del producto </strong></label>
                <input type="text" name="codigo" class="form-control" required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for=""> <strong> Nombre </strong></label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for=""> <strong> Precio </strong></label>
                <input type="number" name="precio" step="any" class="form-control" required>
            </div>
            <div class="col-md-6 mt-2 mb-21">
                <label for=""> <strong> Stock </strong></label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <div class="col-md-12 mt-3 mb-3">
                <label for=""> <strong> Descripción </strong></label>
                <textarea name="descripcion" rows="1" class="form-control"></textarea>
            </div>
            <div class="col-md-12 mt-4 mb-1">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </div>
    </form>
@endsection