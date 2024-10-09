<?php 
include "conexion.php";

// Verificar si se ha enviado el formulario de búsqueda
$nombre_buscar = "";
if (isset($_POST["buscar"])) {
    $nombre_buscar = trim($_POST["nombre"]);
}

// Si el usuario ha ingresado un nombre para buscar, realizar la búsqueda
if ($nombre_buscar !== "") {
    // Consulta preparada para obtener las calificaciones de un cursionista con un nombre específico
    $consulta_calificaciones = $con->prepare("SELECT * FROM `calificaciones` WHERE Nombre LIKE ?");
    $nombre_buscar_param = "%" . $nombre_buscar . "%"; // Usamos el comodín % para buscar coincidencias parciales
    $consulta_calificaciones->bind_param("s", $nombre_buscar_param);
    $consulta_calificaciones->execute();
    $resultado_calificaciones = $consulta_calificaciones->get_result();

    // Mostrar los resultados en una tabla HTML
    if ($resultado_calificaciones->num_rows > 0) {
        echo "<h2>Calificaciones para '$nombre_buscar'</h2>";
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
        echo "No se encontraron calificaciones para '$nombre_buscar'.";
    }

    $consulta_calificaciones->close();
} else if (isset($_POST["buscar"])) {
    echo "Por favor ingrese un nombre para buscar.";
}

// Cierre de la conexión
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Calificaciones</title>
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
        .search-container {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <!-- Formulario de búsqueda -->
        <form action="" method="POST">
            <label for="nombre">Buscar calificaciones por nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">
            <button type="submit" name="buscar" class="btn btn-primary">Buscar</button>
        </form>
    </div>

    <a href="bomberosjefe.php" class="btn-back">Volver a Inicio</a>
</body>
</html>


