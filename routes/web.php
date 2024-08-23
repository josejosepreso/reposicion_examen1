<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\empleadoControlador;
use App\Http\Controllers\productoControlador;
use App\Http\Controllers\proveedorControlador;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/empleados', [empleadoControlador::class, 'verEmpleados'])->name('ver.empleados');

Route::get('/empleados/crear', [empleadoControlador::class, 'crear'])->name('crear.empleado');

Route::post('/empleados/crear/guardar', [empleadoControlador::class, 'guardar'])->name('guardar.empleado');




Route::get('/productos', [productoControlador::class, 'verProductos'])->name('ver.productos');

Route::get('/productos/crear', [productoControlador::class, 'crear'])->name('crear.producto');

Route::post('/productos/crear/guardar', [productoControlador::class, 'guardar'])->name('guardar.producto');





Route::get('/proveedores', [proveedorControlador::class, 'verProveedores'])->name('ver.proveedores');

Route::get('/proveedores/crear', [proveedorControlador::class, 'crear'])->name('crear.proveedor');

Route::post('/proveedores/crear/guardar', [proveedorControlador::class, 'guardar'])->name('guardar.proveedor');