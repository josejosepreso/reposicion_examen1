<?php

namespace App\Http\Controllers;

use App\Models\Proveedore;
use Illuminate\Http\Request;

class proveedorControlador extends Controller
{
    //

    public function verProveedores() {

        $proveedores = Proveedore::all();

        return view('proveedores', compact('proveedores'));
    }

    public function crear() {

        return view('crearProveedor');
    }

    public function guardar(Request $request) {

        $nvoProveedor = new Proveedore();
        $nvoProveedor->idProveedor = $request->idProveedor;        
        $nvoProveedor->nombre = $request->nombre;
        $nvoProveedor->fechaRegistro = $request->fechaRegistro;
        $nvoProveedor->telefono = $request->telefono;
        $nvoProveedor->correo = $request->correo;

        $nvoProveedor->save();

        return redirect('/proveedores');
    }
}
