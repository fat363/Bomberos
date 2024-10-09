<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir elementos </title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 2em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            max-width: 800px;
            width: 100%;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
        }
        .header img {
            height: 50px;
            margin-right: 1em;
        }
        h1 {
            margin: 0;
        }
        .form-group {
            margin-bottom: 1em;
        }
        .form-group label {
            width: 20%;
            text-align: right;
            margin-right: 1em;
        }
        .form-group input, .form-group select {
            width: 75%;
        }
        .form-row {
            display: flex;
            align-items: center;
        }
        .btn-primary {
            width: 100%;
            padding: 0.75em;
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
    </style>
</head>
<body>
    <a href="inventarios.php" class="btn-back">Volver a Inicio</a>
    <div class="container">
        <div class="header">
            <img src="bomberosmc.jpeg" alt="Logo Bomberos">
            <h1>Añadir elementos al inventario</h1>
        </div>
        <form action="agregarlemodi.php" method="post">
            <div class="form-group form-row">
                <label for="id_vehiculo">ID Vehículo</label>
                <input type="number" class="form-control" id="id_vehiculo" name="id_vehiculo" required>
            </div>
            <div class="form-group form-row">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group form-row">
                <label for="disponible">Disponible</label>
                <input type="text" class="form-control" id="disponible" name="disponible" required>
            </div>
            <div class="form-group form-row">
                <label for="condicion">Condición</label>
                <input type="text" class="form-control" id="condicion" name="condicion" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
