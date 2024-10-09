<?php
// Conexión a la base de datos
$host = 'localhost';
$dbname = 'Bomberos';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Consulta para obtener los subequipos con id_vehiculo = 4
$sql = "SELECT id_vehiculo, Nombre, disponible, condicion FROM subequipos WHERE id_vehiculo = 4";
$query = $pdo->prepare($sql);
$query->execute();
$subequipos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M12-Mercedes Accelo Abast</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 2em auto;
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5em;
        }
        .header img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }
        .header h1 {
            margin: 0;
            font-size: 1.8em;
            color: #333;
            font-weight: bold;
        }
        .back-button {
            position: absolute;
            top: 10px;
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
        .back-button:hover {
            background-color: #0056b3;
        }
        .card {
            margin-bottom: 1em;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 1.5em;
        }
        .card-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 0.75em;
            font-weight: 600;
        }
        .card-text {
            margin-bottom: 0.5em;
            color: #555;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="back-button" href="inventarios.php">Volver a inicio</a>
        <div class="header">
            <img src="bomberosmc.jpeg" alt="Logotipo de Bomberos">
            <h1>M12-Mercedes Accelo Abast</h1>
        </div>

        <?php if (!empty($subequipos)): ?>
            <?php foreach ($subequipos as $subequipo): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($subequipo['Nombre']); ?></h5>
                        <p class="card-text"><strong>Vehículo:</strong> <?php echo htmlspecialchars($subequipo['id_vehiculo']); ?></p>
                        <p class="card-text"><strong>Disponible:</strong> <?php echo htmlspecialchars($subequipo['disponible']); ?></p>
                        <p class="card-text"><strong>Condición:</strong> <?php echo htmlspecialchars($subequipo['condicion']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay subequipos disponibles para el ID Vehículo 1.</p>
        <?php endif; ?>
    </div>
</body>
</html>