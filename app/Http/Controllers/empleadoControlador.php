<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class empleadoControlador extends Controller
{
    //

    public function verEmpleados() {

        $empleados = Empleado::all();

        return view('empleados', compact('empleados'));
    }

    public function crear() {

        return view('crearEmpleado');
    }

    public function guardar(Request $request) {

        $nvoEmpleado = new Empleado();
        $nvoEmpleado->idEmpleado = $request->idEmpleado;
        $nvoEmpleado->nombre = $request->nombre;
        $nvoEmpleado->apellido = $request->apellido;
        $nvoEmpleado->salario = $request->salario;
        $nvoEmpleado->fechaIngreso = $request->fechaIngreso;

        $nvoEmpleado->save();

        return redirect('/empleados');
    }
}
