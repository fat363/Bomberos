<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Bomberos Monte Cristo</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(255,0,0);
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
        }
        .container {
            width: 100%;
            max-width: 800px;
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 2em;
        }
        .header h1 {
            margin: 0;
            color: #333;
            font-size: 1.8em;
            margin-right: 20px;
        }
        .header .logo {
            width: 80px;
            height: 80px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            overflow: hidden;
        }
        .header .logo img {
            width: 100%;
            height: auto;
        }
        .button-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1em;
        }
        .btn-animated {
            display: inline-block;
            width: 100%;
            padding: 1em;
            font-size: 1.1em;
            text-align: center;
            border: none;
            border-radius: 8px;
            color: #fff;
            background-color: #007bff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }
        .btn-animated:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .btn-animated:nth-of-type(even) {
            background-color: #17a2b8;
        }
        .btn-animated:nth-of-type(odd) {
            background-color: #17a2b8;
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
        .back2-button {
            position: absolute;
            top: 610px;
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
        .back2-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="bomberosjefe.php" class="btn-back">Volver a Inicio</a>
    <a class="back2-button" href="agregarele.php">Agregar Elemento</a>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="bomberosmc.jpeg" alt="Logo">
            </div>
            <h1>Inventario Bomberos Monte Cristo</h1>
        </div>
        <div class="button-grid">
            <a href="M7.php" class="btn-animated">M7-DAF</a>
            <a href="M10.php" class="btn-animated">M10-Amarok kit Forestal</a>
            <a href="M11.php" class="btn-animated">M11-Renault Thomas</a>
            <a href="M12.php" class="btn-animated">M12-Mercedes Accelo Abast</a>
            <a href="M13.php" class="btn-animated">M13-Iveco Rescate</a>
            <a href="M14.php" class="btn-animated">M14-Amarok Logistica</a>
        </div>
    </div>
</body>
</html>
