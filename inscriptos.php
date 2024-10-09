<?php
include 'conexion.php';

// Consulta SQL para obtener los aspirantes
$sql = "SELECT DNI, Nombre, Apellido, Edad, Telefono, email, categoria FROM Inscripcion"; // Cambia 'tabla_aspirantes' por el nombre real de tu tabla
$result = mysqli_query($con, $sql);

// Verifica si se obtuvieron resultados
if (mysqli_num_rows($result) > 0) {
    // Almacena los resultados en un array
    $inscriptos = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $inscriptos[] = $row;
    }
} else {
    $inscriptos = [];
}

// Cierra la conexión
mysqli_close($con);
?>

