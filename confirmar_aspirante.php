<?php
include 'conexion.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $dni = $_POST['DNI'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $telefono = $_POST['Telefono'];
    // Asumiendo que los otros datos (dirección, cargo) se rellenarán más tarde o están predeterminados
    $direccion = ''; // Añade dirección si está disponible en el formulario
    $cargo = 'Curso Basico de Bombero voluntario'; // Ejemplo de cargo

    // Insertar datos en la tabla Bomberos
    $sql_insert = "INSERT INTO Bomberos (DNI, Nombre, Apellido, Direccion, Telefono, Cargo) 
                   VALUES ('$dni', '$nombre', '$apellido', '$direccion', '$telefono', '$cargo')";
    if (mysqli_query($con, $sql_insert)) {
        // Eliminar el registro de la tabla Inscripcion
        $sql_delete = "DELETE FROM Inscripcion WHERE DNI = '$dni'";
        mysqli_query($con, $sql_delete);
        echo "Aspirante confirmado y movido a la tabla Bomberos.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Cerrar la conexión
    mysqli_close($con);

    // Redireccionar o mostrar un mensaje
    header('Location:bomberos.php'); // Redirige a la página de aspirantes
    exit();
}
?>
