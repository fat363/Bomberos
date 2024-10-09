<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Bomberos</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
            position: relative;
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
        .container {
            max-width: 800px;
            margin: 2em auto;
            background: #fff;
            padding: 2em;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5em;
        }
        .header img {
            width: 60px;
            height: 60px; 
            margin-right: 20px;
        }
        .form-group {
            margin-bottom: 1.5em;
        }
        label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 0.5em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn-primary {
            padding: 1em;
            font-size: 1.1em;
            text-align: center;
            background-color: #007bff;
            border: none;
            border-radius: 30px;
            color: #fff;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="cursos.php" class="btn-back">Volver a Inicio</a>
    <div class="container">
        <div class="header">
            <img id="logo1" src="bomberosmc.jpeg" alt="Logo Bomberos">
            <h1>Formulario de Inscripción a Cursos</h1>
        </div>
        <form action="cursodate.php" method="post">
            <div class="form-group">
                <label for="DNI">DNI:</label>
                <input type="number" id="DNI" name="DNI" required>
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido:</label>
                <input type="text" id="Apellido" name="Apellido" required>
            </div>
            <div class="form-group">
                <label for="Edad">Edad:</label>
                <input type="number" id="Edad" name="Edad" required>
            </div>
            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="number" id="Telefono" name="Telefono" required>
            </div>
            <div class="form-group">
                <label for="id_curso">Selecciona un Curso:</label>
                <select id="id_curso" name="id_curso">
                    <option value="1">Curso Básico de Bombero Voluntario</option>
                    <option value="2">Cabo</option>
                    <option value="3">Cabo Primero</option>
                    <option value="4">Sargento </option>
                    <option value="5"> Sargento Primero </option>
                    <option value="6">Sargento Ayudante</option>
                    <option value="7">Sub oficial principal</option>
                    <option value="8">Sub oficial principal</option>
                    <option value="9">Sub oficial mayor</option>
                    <option value="10">Oficial Ayudante</option>
                    <option value="11">Sub inspector</option>
                    <option value="12">Oficial principal</option>
                    <option value="13">Sub comisario</option>
                    <option value="14">Comisario</option>
                    <option value="15">Comisario Inspector</option>
                    <option value="16">Comisario Mayor</option>
                    <option value="17">Comisario General</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>

