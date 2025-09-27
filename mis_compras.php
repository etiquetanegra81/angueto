<?php
session_start();
require 'conexion.php';

if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para ver tus compras.");
}

$id_del_usuario = $_SESSION['id_usuario'];

// Obtener las compras del usuario
$sql_compras = "SELECT id, fecha_compra, total_compra FROM compras WHERE id_usuario = ? ORDER BY fecha_compra DESC";
$sentencia_compras = $conn->prepare($sql_compras);
$sentencia_compras->bind_param("i", $id_del_usuario);
$sentencia_compras->execute();
$resultado_compras = $sentencia_compras->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Compras</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contenedor-compras {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .compra {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .compra h3 {
            margin-top: 0;
            color: darksalmon;
        }
        .compra table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .compra th, .compra td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .compra th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="contenedor-compras">
        <h1>Mi Historial de Compras</h1>
        <?php
        if ($resultado_compras->num_rows > 0) {
            while ($compra = $resultado_compras->fetch_assoc()) {
                echo "<div class='compra'>";
                echo "<h3>Compra #" . $compra['id'] . "</h3>";
                echo "<p>Fecha: " . $compra['fecha_compra'] . "</p>";
                echo "<p>Total: $" . number_format($compra['total_compra'], 2) . "</p>";
                
                // Obtener los detalles de esta compra
                $sql_detalles = "SELECT nombre_producto, cantidad, precio FROM detalles_compra WHERE id_compra = ?";
                $sentencia_detalles = $conn->prepare($sql_detalles);
                $sentencia_detalles->bind_param("i", $compra['id']);
                $sentencia_detalles->execute();
                $resultado_detalles = $sentencia_detalles->get_result();

                echo "<table>";
                echo "<thead><tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th></tr></thead>";
                echo "<tbody>";
                while ($detalle = $resultado_detalles->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($detalle['nombre_producto']) . "</td>";
                    echo "<td>" . htmlspecialchars($detalle['cantidad']) . "</td>";
                    echo "<td>$" . number_format($detalle['precio'], 2) . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                $sentencia_detalles->close();
                echo "</div>";
            }
        } else {
            echo "<p>No has realizado ninguna compra aún.</p>";
        }
        $sentencia_compras->close();
        $conn->close();
        ?>
        <a class="boton-volver" href="Productos.php">Volver a los productos</a>
    </div>
</body>
</html>