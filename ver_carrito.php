<?php
// Iniciar la sesión para acceder a la información del usuario
session_start();

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para ver tu carrito.");
}

// Obtener el ID del usuario de la sesión
$id_del_usuario = $_SESSION['id_usuario'];

// Preparar la consulta SQL para obtener los productos del carrito del usuario
// Usamos un JOIN para obtener los datos de los productos de la tabla `productos`
$sql_obtener_carrito = "SELECT p.nombre, p.marca, p.precio, c.cantidad FROM carrito c JOIN productos p ON c.id_producto = p.id WHERE c.id_usuario = ?";
$sentencia_carrito = $conn->prepare($sql_obtener_carrito);
$sentencia_carrito->bind_param("i", $id_del_usuario);
$sentencia_carrito->execute();
$resultado_carrito = $sentencia_carrito->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-carrito">
    <h1 class="titulo-carrito">Mi Carrito de Compras</h1>
    <table class="tabla-carrito">
        <thead>
            <tr >
                <th>Producto</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_general = 0;
            // Recorrer cada fila del resultado de la consulta
            while ($fila = $resultado_carrito->fetch_assoc()) {
                $subtotal = $fila['precio'] * $fila['cantidad'];
                $total_general += $subtotal;
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['marca']) . "</td>";
                echo "<td>$" . number_format($fila['precio'], 2) . "</td>";
                echo "<td>" . htmlspecialchars($fila['cantidad']) . "</td>";
                echo "<td>$" . number_format($subtotal, 2) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr class="fila-total">
                <td colspan="4">Total:</td>
                <td>$<?php echo number_format($total_general, 2); ?></td>
            </tr>
        </tfoot>
    </table>
    <div class="botones-acciones">
        <a class="boton-continuar" href="Productos.php">Continuar Comprando</a>
        <a class="boton-finalizar" href="finalizar_compra.php">Finalizar Compra</a>
    </div>
</body>
</html>
<?php
// Cerrar la sentencia y la conexión
$sentencia_carrito->close();
$conn->close();
?>