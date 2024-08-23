<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Crear empleado</h2>
    <form method="POST" action="{{ route('guardar.empleado') }}">
        @csrf
        <p>idEmpleado</p>
        <input name="idEmpleado" type="number" min="1" required>
        <p>Nombre</p>
        <input name="nombre" required>
        <p>Apellido</p>
        <input name="apellido" required>
        <p>Salario</p>
        <input name="salario" type="number" step="0.1" required>
        <p>fechaIngreso</p>
        <input name="fechaIngreso" type="date" required>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>