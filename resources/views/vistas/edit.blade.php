<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <h1>Editar un servicio existente:</h1>
    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="cliente">Cliente:</label>
        <br>
        <input type="text" name="cliente" value="{{ $servicio->cliente }}">
        <br><br>
        <label for="telefono">Telefono:</label>
        <br>
        <input type="number" name="telefono" value="{{ $servicio->telefono }}">
        <br><br>
        <label for="tipo_dispositivo">Tipo de Dispositivo:</label>
        <br>
        <input type="text" name="tipo_dispositivo" value="{{ $servicio->tipo_dispositivo }}">
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <br>
        <input type="number" name="cantidad" value="{{ $servicio->cantidad }}">
        <br><br>
        <label for="servicio">Servicio:</label>
        <br>
        <input type="text" name="servicio" value="{{ $servicio->servicio }}">
        <br><br>
        <label for="precio">Precio:</label>
        <br>
        <input type="number" name="precio" value="{{ $servicio->precio }}">
        <br><br>
        <label for="estado">Estado:</label>
        <br>
        <select name="estado" id="estado">
            <option value="Recibido" {{ $servicio->estado =='Recibido' ? 'selected' : '' }}>Recibido</option>
            <option value="En Proceso" {{ $servicio->estado =='En Proceso' ? 'selected' : '' }}>En Proceso</option>
            <option value="Listo" {{ $servicio->estado =='Listo' ? 'selected' : '' }}>Listo</option>
            <option value="Entregado" {{ $servicio->estado =='Entregado' ? 'selected' : '' }}>Entregado</option>
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="{{ route('servicios.index') }}">Volver a al inicio</a>
</body>
</html>