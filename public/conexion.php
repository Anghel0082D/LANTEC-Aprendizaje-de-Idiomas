<?php
$servername = "137.184.37.23";
$username = "sammy";
$password = "password";
$dbname = "lantec";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

