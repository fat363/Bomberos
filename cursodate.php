<?php
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Edad = $_POST["Edad"];
$Telefono = $_POST["Telefono"];
$id_curso = $_POST["id_curso"];


include "conexion.php";

$insertar = "INSERT INTO `Curso_inscripcion`(`DNI`, `Nombre`, `Apellido`, `Edad`, `Telefono`,`id_curso`) VALUES ('$DNI', '$Nombre', '$Apellido', '$Edad', '$Telefono', '$id_curso')";
echo "Consulta SQL: $insertar <br>";

if (mysqli_query($con, $insertar)) {
    echo "Datos guardados con éxito";
} else {
    echo "Hubo un error: " . mysqli_error($con);
}

mysqli_close($con);

?>