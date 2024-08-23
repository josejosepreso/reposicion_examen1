<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Productos</h2>
    <table style="border:solid 1px black;">
        <thead>
            <tr>
                <th>id</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Paga ISV</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->pagaIsv }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('crear.producto') }}">Crear producto</a>
    
</body>
</html>