<?php
include 'conexion.php'; // Asegúrate de tener una conexión a tu base de datos

// Consulta SQL para obtener los bomberos de la tabla
$sql = "SELECT DNI, Nombre, Apellido, Direccion, Telefono, Cargo FROM Bomberos";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Bomberos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .table-container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
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

<div class="table-container">
    <h2>Lista de Bomberos</h2>
    <a href="bomberosjefe.php" class="btn-back">Volver a Inicio</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Verificar si hay resultados
            if (mysqli_num_rows($result) > 0) {
                // Mostrar cada fila de resultado en la tabla
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['DNI']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Apellido']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Direccion']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Telefono']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Cargo']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No se encontraron bomberos registrados.</td></tr>";
            }

            // Cerrar la conexión
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
