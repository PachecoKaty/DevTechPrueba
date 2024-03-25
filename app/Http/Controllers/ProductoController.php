<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Se hace la consulta a la base de datos para recuperar los productos y mostrarlos en la vista index 
        $productos = Producto::orderBy('id', 'desc')->get();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validamos los datos que se envian desde le formulario
        $request->validate([
           'nombre' => 'required|string|max:200',
           'precio' => 'required|numeric',
           'stock' => 'required|integer',
           'codigo' => 'required|string',
        ]);
        $producto = Producto::create($request->all());
        $producto->save();
    

        return to_route('producto.index')->with('success', 'Producto creado correctamente ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validamos los datos
        $request->validate([
            'nombre' => 'required|string|max:200',
            'codigo' => 'required|string|max:10',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
         ]);
        
        //Buscamos el id del producto que se quiere actualizar
        $producto = Producto::find($id);
        $producto->update($request->all());
        
        //Mostramos un mensaje de sesion, informando que se ha realizado su peticion
        return to_route('producto.index')->with('success', 'Producto actualizado correctamente ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
    
        //Verificamos si el producto existe
        if (!$producto) {
            return to_route('producto.index')->with('error', 'Error al eliminar el producto');
        }
    
        $producto->delete();
    
        return to_route('producto.index')->with('success', 'Producto eliminado correctamente');
    }

}
