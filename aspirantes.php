<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirantes Inscriptos</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
        }
        .container {
            max-width: 900px; /* Reducción del ancho máximo */
            margin: 2em auto;
            background: #fff;
            padding: 1.5em; /* Reducción del padding */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
        }
        .logo {
            width: 60px; /* Tamaño reducido del logo */
            height: 60px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        .logo img {
            width: 100%;
            height: auto;
        }
        h2 {
            margin: 0;
            color: #333;
            text-align: left;
        }
        .btn-back {
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
        .btn-back:hover {
            background-color: #0056b3;
        }
        .card {
            border: none;
            border-radius: 8px; /* Radio ajustado */
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1); /* Sombra más ligera */
            margin-bottom: 1em;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px); /* Efecto sutil de elevación al pasar el cursor */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 1em;
            font-size: 1em;
            font-weight: bold;
        }
        .card-body {
            padding: 1em; /* Padding reducido */
        }
        .card-title {
            font-size: 1.1em;
            font-weight: bold;
            margin-bottom: 0.5em;
        }
        .card-text {
            font-size: 0.9em;
            color: #333;
            margin-bottom: 0.5em;
        }
    </style>
</head>
<body>
    <a href="bomberosjefe.php" class="btn-back">Volver a Inicio</a>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="bomberosmc.jpeg" alt="Logo">
            </div>
            <h2>Aspirantes Inscriptos</h2>
        </div>
        <?php
        include 'inscriptos.php';
        ?>
        <div class="row">
            <?php foreach ($inscriptos as $inscripto): ?>
                <div class="col-md-6 col-lg-4">
    <div class="card">
        <div class="card-header">
            <?php echo htmlspecialchars($inscripto['Nombre'] . ' ' . $inscripto['Apellido']); ?>
        </div>
        <div class="card-body">
            <p class="card-title">DNI: <?php echo htmlspecialchars($inscripto['DNI']); ?></p>
            <p class="card-text">Edad: <?php echo htmlspecialchars($inscripto['Edad']); ?></p>
            <p class="card-text">Teléfono: <?php echo htmlspecialchars($inscripto['Telefono']); ?></p>
            <p class="card-text">Email: <?php echo htmlspecialchars($inscripto['email']); ?></p>
            <p class="card-text">Categoría: <?php echo htmlspecialchars($inscripto['categoria']); ?></p>
            <!-- Botón para confirmar aspirante -->
            <form action="confirmar_aspirante.php" method="POST">
                <input type="hidden" name="DNI" value="<?php echo $inscripto['DNI']; ?>">
                <input type="hidden" name="Nombre" value="<?php echo $inscripto['Nombre']; ?>">
                <input type="hidden" name="Apellido" value="<?php echo $inscripto['Apellido']; ?>">
                <input type="hidden" name="Telefono" value="<?php echo $inscripto['Telefono']; ?>">
                <!-- Agregar más campos si es necesario -->
                <button type="submit" class="btn btn-success">Confirmar Aspirante</button>
            </form>
        </div>
    </div>
</div>

            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>