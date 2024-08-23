<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Crear producto</h2>
    <form method="POST" action="{{ route('guardar.producto') }}">
        @csrf
        <p>id</p>
        <input name="id" type="number" required>
        <p>Descripcion</p>
        <input name="descripcion" required>
        <p>Precio</p>
        <input name="precio" type="number" min="0" step="0.1" required>
        <p>Stock</p>
        <input name="stock" type="number" min="0" required>
        <p>Paga ISV</p>
        <input name="pagaIsv" type="number" max="1" min="0" required>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>