<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        //Vista de producto.
        // $productos = Productos::all();
        $productos = Productos::get(['id', 'nombre', 'descripcion', 'precio']);
        // return view('productos.index' , ['productos' => $productos]);
        return view('productos.index', compact('productos'));

    }
    
    public function create()
    {
        //Generar vista para registrar el producto
        return view('productos.create');
    }
    public function store(Request $request)
    {
        //
        $request->validate([
           'nombre_producto' => 'required|max:20',
           'descripcion_producto' => 'required|max:250',
           'precio_producto' => 'required'
        ]);

        $productos = new Productos();
        $productos->nombre = $request->input('nombre_producto');
        $productos->descripcion = $request->input('descripcion_producto');
        $productos->precio = $request->input('precio_producto');
        $productos->save();

        return view('productos.message', ['msg'=> 'registro guardado']);
    }

    public function show($id)
    {
        //
        $producto = Productos::find($id);
        return view('productos.ver', ['producto' => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Productos::find($id);
        return view('productos.edit', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre_producto' => 'required|max:20',
            'descripcion_producto' => 'required|max:250',
            'precio_producto' => 'required'
         ]);
 
         $productos = Productos::find($id);
         $productos->nombre = $request->input('nombre_producto');
         $productos->descripcion = $request->input('descripcion_producto');
         $productos->precio = $request->input('precio_producto');
         $productos->save();
         return view('productos.message', ['msg'=> 'registro guardado']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $producto = Productos::find($id);
        $producto->delete();
        return view('productos.message', ['msg'=> 'registro eliminado']);
    }
}