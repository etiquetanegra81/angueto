<?php
// Iniciar la sesión para acceder a la información del usuario
session_start();

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para finalizar la compra.");
}

// Obtener el ID del usuario de la sesión
$id_del_usuario = $_SESSION['id_usuario'];

// Preparar la consulta SQL para vaciar el carrito del usuario
$sql_vaciar_carrito = "DELETE FROM carrito WHERE id_usuario = ?";
$sentencia_finalizar = $conn->prepare($sql_vaciar_carrito);
$sentencia_finalizar->bind_param("i", $id_del_usuario);
$sentencia_finalizar->execute();

// Cerrar la sentencia y la conexión
$sentencia_finalizar->close();
$conn->close();

echo "¡Compra finalizada con éxito! El carrito ha sido vaciado.";
?>