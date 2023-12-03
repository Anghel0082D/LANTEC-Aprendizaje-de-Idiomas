<?php
include "conexion.php"; // Incluir el archivo de conexión

$nombre = $_POST["nombre"];
$apellidop= $_POST["apellidop"];
$apellidom= $_POST["apellidom"];
$email = $_POST["email"];
$password = $_POST["password"];
echo $nombre,$apellidop,$apellidom,$email,$password;
$sql = "INSERT INTO alumnos(nombre, correo,contraseña,ap_paterno,ap_materno) VALUES ('$nombre', '$email','$password','$apellidop','$apellidom')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // Cerrar la conexión
?>
