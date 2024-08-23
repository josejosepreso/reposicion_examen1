<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Empleados</h2>
    <table style="border:solid 1px black;">
        <thead>
            <tr>
                <th>idEmpleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Salario</th>
                <th>Fecha ingreso</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->idEmpleado }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>{{ $empleado->fechaIngreso }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('crear.empleado') }}">Crear empleado</a>
    
</body>
</html>