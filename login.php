<?php
// Iniciar la sesión para manejar las variables de sesión
session_start();

// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar si la solicitud es de tipo POST (si se envió el formulario de inicio de sesión)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $correo_electronico_ingresado = $_POST['email'];
    $contrasena_ingresada = $_POST['contrasena'];

    // Preparar la consulta SQL para buscar el usuario por su correo electrónico
    $sql_buscar_usuario = "SELECT id, nombre, contrasena FROM usuarios WHERE email = ?";
    $sentencia = $conn->prepare($sql_buscar_usuario);
    $sentencia->bind_param("s", $correo_electronico_ingresado);
    $sentencia->execute();
    $sentencia->store_result(); // Almacenar el resultado para poder contar las filas
    $sentencia->bind_result($id_usuario, $nombre_usuario, $contrasena_hash_almacenada);
    $sentencia->fetch();

    // Verificar si se encontró un usuario con ese correo electrónico
    if ($sentencia->num_rows > 0) {
        // Verificar si la contraseña ingresada coincide con la contraseña hasheada en la BD
        if (password_verify($contrasena_ingresada, $contrasena_hash_almacenada)) {
            // Si las contraseñas coinciden, iniciar la sesión
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre_usuario'] = $nombre_usuario;

            echo "¡Inicio de sesión exitoso! Bienvenido, " . $_SESSION['nombre_usuario'] . ".";
            header("Location: Productos.php"); // Redirigir a la página de productos
            exit();
        } else {
            echo "Contraseña incorrecta. Por favor, inténtalo de nuevo.";
        }
    } else {
        echo "El usuario no fue encontrado. Verifica tu correo electrónico.";
    }

    // Cerrar la sentencia y la conexión
    $sentencia->close();
    $conn->close();
}
?>