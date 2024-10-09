<?php
session_start(); // Asegúrate de iniciar la sesión al comienzo

$usuario = $_POST["usuario"];
$Contraseña = $_POST["Contraseña"];

// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "Bomberos");

if (!$con) {
    die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
}

// Consulta SQL para verificar el usuario y la contraseña
$query = "SELECT id_cliente FROM clientes WHERE usuario = ? AND Contraseña = ?";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "ss", $usuario, $Contraseña);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $id_cliente = $row['id_cliente'];

    // Si el usuario es el administrador (puyol)
    if ($usuario === 'puyol' && $Contraseña === '2005') {
        $_SESSION['id_cliente'] = $id_cliente;  // Almacena el ID del administrador en la sesión
        header('Location: bomberosjefe.php');
    } else {
        // Si es un usuario regular
        $_SESSION['id_cliente'] = $id_cliente;  // Almacena el ID del cliente en la sesión
        header('Location: bombervolun.php');
    }
    exit(); // Importante para detener el script después de la redirección
} else {
    echo "Usuario o contraseña incorrectos";
}

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>
