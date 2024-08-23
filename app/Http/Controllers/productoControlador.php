<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class productoControlador extends Controller
{
    //

    public function verProductos() {

        $productos = Producto::all();

        return view('productos', compact('productos'));
    }

    public function crear() {

        return view('crearProducto');
    }

    public function guardar(Request $request) {

        $nvoProducto = new Producto();
        $nvoProducto->id = $request->id;        
        $nvoProducto->descripcion = $request->descripcion;
        $nvoProducto->precio = $request->precio;
        $nvoProducto->stock = $request->stock;
        $nvoProducto->pagaIsv = $request->pagaIsv;

        $nvoProducto->save();

        return redirect('/productos');
    }
}
