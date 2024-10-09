<?php
// Conexión a la base de datos
include 'conexion.php'; // Asegúrate de que este archivo contiene tu conexión a la base de datos

// Obtener el DNI del inscrito desde la URL
if (isset($_GET['DNI'])) {
    $dni = $_GET['DNI'];

    // Consultar los datos del inscrito
    $query = "SELECT * FROM inscriptos WHERE DNI = '$dni'";
    $resultado = mysqli_query($conexion, $query);

    // Verificar si se obtuvieron resultados
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $inscripto = mysqli_fetch_assoc($resultado);
    } else {
        echo "No se encontraron datos para este inscrito.";
        exit;
    }
} else {
    echo "DNI no proporcionado.";
    exit;
}

// Si se envía el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mover el inscrito a la tabla de bomberos
    $nombre = $inscripto['Nombre'];
    $apellido = $inscripto['Apellido'];
    $edad = $inscripto['Edad'];
    $telefono = $inscripto['Telefono'];
    $email = $inscripto['email'];

    // Insertar en la tabla de bomberos
    $insert_query = "INSERT INTO bomberos (DNI, Nombre, Apellido, Edad, Telefono, Email, Escalafon_jerarquica)
                     VALUES ('$dni', '$nombre', '$apellido', '$edad', '$telefono', '$email', 'Escalafón Inicial')";
    
    if (mysqli_query($conexion, $insert_query)) {
        // Eliminar el inscrito de la tabla de inscriptos
        $delete_query = "DELETE FROM inscripcion WHERE DNI = '$dni'";
        mysqli_query($conexion, $delete_query);
        echo "El inscrito ha sido confirmado como bombero y eliminado de la lista de inscriptos.";
    } else {
        echo "Error al confirmar al bombero: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Inscripto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Modificar Inscripto</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo htmlspecialchars($inscripto['Nombre']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo htmlspecialchars($inscripto['Apellido']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="Edad" name="Edad" value="<?php echo htmlspecialchars($inscripto['Edad']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" value="<?php echo htmlspecialchars($inscripto['Telefono']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($inscripto['email']); ?>" readonly>
            </div>

            <!-- Botón Confirmar -->
            <button type="submit" class="btn btn-success">Confirmar Bombero</button>
        </form>
    </div>
</body>
</html>

