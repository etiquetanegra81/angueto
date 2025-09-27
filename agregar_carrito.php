<?php
// Iniciar la sesión para acceder a la información del usuario
session_start();

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para agregar productos al carrito.");
}

// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtener el ID del usuario de la sesión y los datos del formulario
    $id_del_usuario = $_SESSION['id_usuario'];
    $id_del_producto = $_POST['id_producto'];
    $cantidad_a_agregar = $_POST['cantidad'];

    // Consultar si el producto ya está en el carrito del usuario
    $sql_verificar_carrito = "SELECT id, cantidad FROM carrito WHERE id_usuario = ? AND id_producto = ?";
    $sentencia_verificar = $conn->prepare($sql_verificar_carrito);
    $sentencia_verificar->bind_param("ii", $id_del_usuario, $id_del_producto);
    $sentencia_verificar->execute();
    $sentencia_verificar->store_result();

    if ($sentencia_verificar->num_rows > 0) {
        // Si el producto ya está en el carrito, actualizar la cantidad
        $sentencia_verificar->bind_result($id_del_item_carrito, $cantidad_actual);
        $sentencia_verificar->fetch();
        $nueva_cantidad = $cantidad_actual + $cantidad_a_agregar;

        $sql_actualizar_carrito = "UPDATE carrito SET cantidad = ? WHERE id = ?";
        $sentencia_actualizar = $conn->prepare($sql_actualizar_carrito);
        $sentencia_actualizar->bind_param("ii", $nueva_cantidad, $id_del_item_carrito);
        $sentencia_actualizar->execute();
        $sentencia_actualizar->close();
    } else {
        // Si el producto no está en el carrito, insertarlo como un nuevo registro
        $sql_insertar_en_carrito = "INSERT INTO carrito (id_usuario, id_producto, cantidad) VALUES (?, ?, ?)";
        $sentencia_insertar = $conn->prepare($sql_insertar_en_carrito);
        $sentencia_insertar->bind_param("iii", $id_del_usuario, $id_del_producto, $cantidad_a_agregar);
        $sentencia_insertar->execute();
        $sentencia_insertar->close();
    }

    // Cerrar la sentencia y la conexión
    $sentencia_verificar->close();
    $conn->close();
}
   echo "Producto agregado exitosamente."; // Este mensaje es el que recibe el AJAX
exit();

?>