<?php
// Habilitar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir el archivo de conexión
include('conexion.php');

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $Nombre = $_POST["nombre"];
    $Apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $Contraseña = password_hash($_POST["contrasena"], PASSWORD_BCRYPT); // Encriptar contraseña
    $Telefono = $_POST["telefono"];
    $Direccion = $_POST["direccion"];

    // Verificar si todos los campos están llenos
    if (empty($Nombre) || empty($Apellido) || empty($usuario) || empty($Contraseña) || empty($Telefono) || empty($Direccion)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }

    // Preparar la consulta
    $stmt = mysqli_prepare($con, "INSERT INTO clientes (Nombre, Apellido, usuario, Contraseña, Telefono, Direccion) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        // Enlazar los parámetros con los valores
        mysqli_stmt_bind_param($stmt, "ssssss", $Nombre, $Apellido, $usuario, $Contraseña, $Telefono, $Direccion);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            // Redirigir si el registro es exitoso
            header('Location: bombervolun.php');
            exit();
        } else {
            echo "Error en la ejecución de la consulta: " . mysqli_stmt_error($stmt);
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta: " . mysqli_error($con);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($con);
}
?>


