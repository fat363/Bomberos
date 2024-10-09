<?php
// Configuración de la base de datos
$host = "localhost";
$dbname = "Bomberos";
$username = "root";
$password = ""; // Cambia esto si tienes una contraseña para tu base de datos

// Crear una conexión a la base de datos
$con = mysqli_connect($host, $username, $password, $dbname);

// Verificar la conexión
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
