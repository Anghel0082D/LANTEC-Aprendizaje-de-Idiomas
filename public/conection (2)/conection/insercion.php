<?php
include "conexion.php"; // Incluir el archivo de conexión

$nombre = $_POST["nombre"];
$email = $_POST["email"];

$sql = "INSERT INTO tabla (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Cerrar la conexión
?>
