<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Tecnológicos</title>
</head>
<body>
    <h1>Servicios de Lavandería</h1>
    <h2>Lista de Servicios</h2>

    <a href="{{ route('servicios.create') }}">Crear Nuevo Servicio</a>
    <br><br>

    <table border="1"> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Tipo de dispositivo</th>
                <th>Cantidad</th>
                <th>Servicio</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id }}</td>
                    <td>{{ $servicio->cliente }}</td>
                    <td>{{ $servicio->telefono }}</td>
                    <td>{{ $servicio->tipo_dispositivo }}</td>
                    <td>{{ $servicio->cantidad }}</td>
                    <td>{{ $servicio->servicio }}</td>
                    <td>{{ $servicio->precio }}</td>
                    <td>{{ $servicio->estado }}</td>
                    <td><a href="{{ route('servicios.edit', $servicio->id) }}">Clic aquí</a></td>
                    <td>
                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>