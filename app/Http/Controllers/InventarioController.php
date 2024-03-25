<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto\Producto;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Realizamos la consulta que me va a mostrar solo los productos con stock menor que 10 en inventario.
        $stockBajo = Producto::join('inventarios as inventario', 'productos.id', '=', 'inventario.producto_id')
        ->where('inventario.stock', '<', 10)
        ->select('productos.nombre', 'productos.stock', 'inventario.stock', 'productos.codigo')
        ->get();
    

        return view('inventario.index', compact('stockBajo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
