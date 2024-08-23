<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Crear Proveedor</h2>
    <form method="POST" action="{{ route('guardar.proveedor') }}">
        @csrf
        <p>idProveedor</p>
        <input name="idProveedor" type="number" min="1" required>
        <p>Nombre</p>
        <input name="nombre" required>
        <p>Fecha registro</p>
        <input name="fechaRegistro" type="date" required>
        <p>Telefono</p>
        <input name="telefono" required>
        <p>Correo</p>
        <input name="correo" type="email" required>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>