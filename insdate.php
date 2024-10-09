<?php
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Edad = $_POST["Edad"];
$Telefono = $_POST["Telefono"];
$categoria = $_POST["categoria"];
$email = $_POST["email"];

$con = mysqli_connect("localhost","root","","Bomberos") or exit("No se pudo conectar a la base de datos");

$insertar = "INSERT INTO Inscripcion(DNI, Nombre, Apellido, Edad, Telefono, categoria, email) VALUES ('$DNI', '$Nombre', '$Apellido', '$Edad', '$Telefono', '$categoria', '$email')";

if (mysqli_query($con, $insertar)) {
    header('Location:aspaceptado.php');
} else {
    echo "Hubo un error: " . mysqli_error($con);
}

mysqli_close($con);
?>
