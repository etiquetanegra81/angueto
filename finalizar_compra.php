<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para finalizar la compra.");
}

$id_del_usuario = $_SESSION['id_usuario'];

// Iniciar una transacción para asegurar que todo se guarde o se revierta si hay un error
$conn->begin_transaction();

try {
    // 1. Obtener los productos del carrito para calcular el total
    $sql_carrito = "SELECT p.nombre, p.precio, c.cantidad, c.id_producto FROM carrito c JOIN productos p ON c.id_producto = p.id WHERE c.id_usuario = ?";
    $sentencia_carrito = $conn->prepare($sql_carrito);
    $sentencia_carrito->bind_param("i", $id_del_usuario);
    $sentencia_carrito->execute();
    $resultado = $sentencia_carrito->get_result();

    $total_compra = 0;
    $items = [];
    while ($fila = $resultado->fetch_assoc()) {
        $total_compra += $fila['precio'] * $fila['cantidad'];
        $items[] = $fila;
    }
    $sentencia_carrito->close();

    if (empty($items)) {
        throw new Exception("El carrito está vacío.");
    }

    // 2. Insertar la compra en la tabla 'compras'
    $sql_insertar_compra = "INSERT INTO compras (id_usuario, total_compra) VALUES (?, ?)";
    $sentencia_compra = $conn->prepare($sql_insertar_compra);
    $sentencia_compra->bind_param("id", $id_del_usuario, $total_compra);
    $sentencia_compra->execute();
    $id_compra = $sentencia_compra->insert_id;
    $sentencia_compra->close();

    // 3. Insertar cada producto en la tabla 'detalles_compra'
    $sql_insertar_detalle = "INSERT INTO detalles_compra (id_compra, id_producto, nombre_producto, cantidad, precio) VALUES (?, ?, ?, ?, ?)";
    $sentencia_detalle = $conn->prepare($sql_insertar_detalle);

    foreach ($items as $item) {
        $sentencia_detalle->bind_param("iisid", $id_compra, $item['id_producto'], $item['nombre'], $item['cantidad'], $item['precio']);
        $sentencia_detalle->execute();
    }
    $sentencia_detalle->close();

    // 4. Vaciar el carrito del usuario
    $sql_vaciar_carrito = "DELETE FROM carrito WHERE id_usuario = ?";
    $sentencia_vaciar = $conn->prepare($sql_vaciar_carrito);
    $sentencia_vaciar->bind_param("i", $id_del_usuario);
    $sentencia_vaciar->execute();
    $sentencia_vaciar->close();

    $conn->commit();
    echo "¡Compra finalizada con éxito! Los detalles han sido guardados.";
    
    // Redirigir a la nueva página de mis compras
    header("Location: mis_compras.php");
    exit();

} catch (Exception $e) {
    $conn->rollback();
    echo "Error al finalizar la compra: " . $e->getMessage();
}

$conn->close();
?>