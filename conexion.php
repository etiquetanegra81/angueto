<?php
$servername = "localhost";
$username = "root"; // Reemplaza con tu usuario
$password = ""; // Reemplaza con tu contraseña
$dbname = "angueto"; // Reemplaza con el nombre de tu BD

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>