<?php
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$id_curso = $_POST["id_curso"];
 
include "conexion.php";

// Consulta preparada para verificar los datos en la tabla 'cursionista'
$consulta = $con->prepare("SELECT * FROM `cursionista` WHERE DNI = ? AND Nombre = ? AND Apellido = ? AND id_curso = ?");
$consulta->bind_param("sssi", $DNI, $Nombre, $Apellido, $id_curso);

$consulta->execute();
$resultado = $consulta->get_result();

if ($resultado->num_rows > 0) {
    // Si los datos coinciden, hacemos una segunda consulta para obtener las calificaciones
    $consulta_calificaciones = $con->prepare("SELECT * FROM `calificaciones` WHERE DNI = ?");
    $consulta_calificaciones->bind_param("s", $DNI);
    $consulta_calificaciones->execute();
    $resultado_calificaciones = $consulta_calificaciones->get_result();

    // Mostrar los resultados en una tabla HTML
    if ($resultado_calificaciones->num_rows > 0) {
        echo "<h2>Calificaciones para $Nombre $Apellido</h2>";
        echo "<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    padding: 12px;
                    text-align: left;
                }
                th {
                    background-color: red;  /* Color de fondo para el encabezado */
                    color: black;
                }
                tr:nth-child(even) {
                    background-color: #f2f2f2;  /* Color alternativo para filas pares */
                }
              </style>";
        echo "<table border='1'>
                <tr>
                    <th>ID Calificación</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nota</th>
                    <th>DNI</th>
                </tr>";
        while ($fila = $resultado_calificaciones->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id_calificacion']}</td>
                    <td>{$fila['Nombre']}</td>
                    <td>{$fila['Apellido']}</td>
                    <td>{$fila['Nota']}</td>
                    <td>{$fila['DNI']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron calificaciones para esta persona.";
    }

    $consulta_calificaciones->close();
} else {
    echo "Error: los datos proporcionados no coinciden con nuestros registros.";
}

// Cierre de la conexión y la consulta preparada
$consulta->close();
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .btn-back {
            position: absolute;
            top: 2px;
            right: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            padding: 0.5em 1em;
            font-size: 1em;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="bombervolun.php" class="btn-back">Volver a Inicio</a>
    </body>
</html>


