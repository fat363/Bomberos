<?php
$id_vehiculo=$_POST["id_vehiculo"];
$nombre=$_POST["nombre"];
$disponible=$_POST["disponible"];
$condicion=$_POST["condicion"];

// Conexión a la base de datos
$con = mysqli_connect("localhost","root","","Bomberos") or exit("No se pudo conectar a la base de datos");

// Consulta para insertar los datos en la tabla subequipos
$insertar = "INSERT INTO `subequipos`(`id_sub_equipo`, `id_vehiculo`, `Nombre`, `disponible`, `condicion`) VALUES (NULL, '$id_vehiculo', '$nombre', '$disponible', '$condicion')";


// Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($con, $insertar)) {
    header('Location: añadidocar.php'); 
} else {
    echo "Hubo un error: " . mysqli_error($con);
}

// Cerrar la conexión
mysqli_close($con);
?>
