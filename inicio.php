<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESIÓN</title>
    <link rel="icon" href="bomberosmc.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pV6e1aP8bC9Rj2Q0UJepp0on6P9H+jF+zY1MjtDeaxuC7I2G0Kk+zI/a2mwTj4GpP71JZfzQ1MZBi6O1z5H2xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,41,41,1) 25%, rgba(255,74,74,1) 50%, rgba(255,41,41,1) 75%, rgba(255,0,0,1) 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            right: 20px;
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
        .container-custom {
            max-width: 500px;
            width: 100%;
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
        .btn-submit {
            padding: 0.75em;
            font-size: 1.1em;
            text-align: center;
            background-color: #007bff;
            border: none;
            border-radius: 30px;
            color: #fff;
            transition: background-color 0.3s ease;
            cursor: pointer;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .btn2-back {
            position: absolute;
            top: 70px;
            right: 20px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            padding: 0.5em 1em;
            font-size: 1em;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn2-back:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <a href="bomberos2.php" class="btn-back">Volver a Inicio</a>
    <a href="registrarse.php" class="btn2-back">Registrarse</a>
    <div class="container-custom">
        <div class="header">
            <img id="logo1" src="bomberosmc.jpeg" alt="Logo Bomberos">
            <h1>Iniciar sesión</h1>
        </div>
        <form action="inicio2.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required class="form-control">
            </div>
            <div class="form-group">
                <label for="Contraseña">Contraseña:</label>
                <div class="input-group">
                    <input type="password" id="Contraseña" name="Contraseña" required class="form-control">
                    <button type="button" class="btn-outline-secondary" onclick="togglePassword()" aria-label="Mostrar u ocultar contraseña">
                        <!-- Ojo normal (abierto) -->
                        <svg id="passwordIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-submit">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+FtE36Ey4mD6LkkoDmAZn+V8B0Q3P" crossorigin="anonymous"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("Contraseña");
            const passwordIcon = document.getElementById("passwordIcon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
                    </svg>
                `;
            } else {
                passwordInput.type = "password";
                passwordIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                    </svg>
                `;
            }
        }
    </script>
</body>
</html>



