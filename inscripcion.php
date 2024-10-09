<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción Bomberos</title>
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
    <a href="bombervolun.php" class="btn-back">Volver a Inicio</a>
    <div class="container">
        <div class="header">
            <img src="bomberosmc.jpeg" alt="Logo Bomberos">
            <h1>Inscripciones a Bomberos</h1>
        </div>
        <form action="insdate.php" method="post">
            <div class="form-group form-row">
                <label for="DNI">DNI</label>
                <input type="number" class="form-control" id="DNI" name="DNI" required>
            </div>
            <div class="form-group form-row">
                <label for="Nombre">Nombre Completo</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            </div>
            <div class="form-group form-row">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
            </div>
            <div class="form-group form-row">
                <label for="Edad">Edad</label>
                <input type="number" class="form-control" id="Edad" name="Edad" required>
            </div>
            <div class="form-group form-row">
                <label for="Telefono">Teléfono</label>
                <input type="number" class="form-control" id="Telefono" name="Telefono" required>
            </div>
            <div class="form-group form-row">
                <label for="Direccion">Dirección</label>
                <input type="text" class="form-control" id="Direccion" name="Direccion" required>
            </div>
            <div class="form-group form-row">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group form-row">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required readonly>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const edadInput = document.getElementById('Edad');
            const categoriaInput = document.getElementById('categoria');
            
            edadInput.addEventListener('input', function() {
                const edad = parseInt(edadInput.value, 10);
                if (!isNaN(edad)) {
                    if (edad >= 18) {
                        categoriaInput.value = 'Mayor';
                    } else {
                        categoriaInput.value = 'Menor';
                    }
                } else {
                    categoriaInput.value = '';
                }
            });
        });
    </script>
</body>
</html>