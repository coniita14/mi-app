<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión del Laboratorio</title>
</head>
<body>

    <h1>Listado de Hardware</h1>

    @forelse ($equipos as $equipo)
        <div>
            <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
            <p><strong>Número de Serie:</strong> {{ $equipo->numero_serie }}</p>
            <p><strong>Descripción:</strong> {{ $equipo->descripcion }}</p>
            <hr>
        </div>
    @empty
        <p>No hay equipos registrados.</p>
    @endforelse

    <h2>Agregar Nuevo Equipo</h2>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Número de Serie:</label><br>
        <input type="text" name="numero_serie" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="descripcion"></textarea><br><br>

        <button type="submit">Guardar Equipo</button>
    </form>

</body>
</html>