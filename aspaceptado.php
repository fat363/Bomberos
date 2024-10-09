<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Aspirantes</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .message-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .message-box h1 {
            color: #ff6347;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .message-box p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn-back {
            background-color: #ff6347;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-back:hover {
            background-color: #e55347;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="message-box">
    <h1>Dato añadido con exito</h1>
    <button class="btn-back" onclick="window.location.href='bombervolun.php'">Volver</button>
</div>

</body>
</html>