<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Proveedores</h2>
    <table style="border:solid 1px black;">
        <thead>
            <tr>
                <th>idProveedor</th>
                <th>Nombre</th>
                <th>Fecha Registro</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->idProveedor }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->fechaRegistro }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('crear.proveedor') }}">Crear proveedor</a>
    
</body>
</html>