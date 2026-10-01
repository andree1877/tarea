<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Nuevo servicio:</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
        <label for="cliente">Cliente:</label>
        <br>
        <input type="text" name="cliente" id="cliente">
        <br><br>
        <label for="telefono">Telefono:</label>
        <br>
        <input type="number" name="telefono" id="telefono">
        <br><br>
        <label for="tipo_dispositivo">Tipo de Dispositivo:</label>
        <br>
        <input type="text" name="tipo_dispositivo" id="tipo_dispositivo">
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <br>
        <input type="number" name="cantidad" id="cantidad">
        <br><br>
        <label for="servicio">Servicio:</label>
        <br>
        <input type="text" name="servicio" id="servicio">
        <br><br>
        <label for="precio">Precio:</label>
        <br>
        <input type="number" name="precio" id="precio">
        <br><br>
        <label for="estado">Estado:</label>
        <br>
        <select name="estado" id="estado">
            <option value="Recibido">Recibido</option>
            <option value="En Proceso">En Proceso</option>
            <option value="Listo">Listo</option>
            <option value="Entregado">Entregado</option>
        </select>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="{{ route('servicios.index') }}">Volver a al inicio</a>
</body>
</html>