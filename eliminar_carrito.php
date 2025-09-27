<?php
// Iniciar la sesión
session_start();

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar que el usuario haya iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para eliminar productos de tu carrito.");
}

// Verificar si se recibió el ID del producto
if (isset($_POST['id_producto'])) {
    $id_del_usuario = $_SESSION['id_usuario'];
    $id_del_producto = $_POST['id_producto'];

    // Preparar la consulta SQL para eliminar el producto del carrito del usuario
    $sql_eliminar = "DELETE FROM carrito WHERE id_usuario = ? AND id_producto = ?";
    $sentencia = $conn->prepare($sql_eliminar);
    $sentencia->bind_param("ii", $id_del_usuario, $id_del_producto);

    if ($sentencia->execute()) {
        echo "Producto eliminado del carrito.";
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }

    $sentencia->close();
}

$conn->close();

// Redirigir de vuelta al carrito
header("Location: ver_carrito.php");
exit();
?>