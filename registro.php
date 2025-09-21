<?php
// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Verificar si la solicitud es de tipo POST (es decir, si se envió el formulario)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario de registro
    $nombre_usuario = $_POST['nombre'];
    $correo_electronico = $_POST['email'];
    $contrasena_plana = $_POST['contrasena'];

    // Cifrar la contraseña para almacenarla de forma segura en la base de datos
    // password_hash() crea un hash seguro de la contraseña
    $contrasena_hash = password_hash($contrasena_plana, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar un nuevo usuario
    // Usamos sentencias preparadas para prevenir inyecciones SQL
    $sql_insertar_usuario = "INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)";
    $sentencia = $conn->prepare($sql_insertar_usuario);

    // Enlazar los parámetros a la consulta
    // "sss" indica que los tres parámetros son de tipo string
    $sentencia->bind_param("sss", $nombre_usuario, $correo_electronico, $contrasena_hash);

    // Ejecutar la consulta
    if ($sentencia->execute()) {
        echo "¡Registro de usuario exitoso!";
        // Redirigir al usuario a la página de inicio de sesión
        header("Location: login.html");
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        // En caso de error, mostrar un mensaje
        echo "Error al registrar el usuario: " . $sentencia->error;
    }

    // Cerrar la sentencia y la conexión a la base de datos
    $sentencia->close();
    $conn->close();
}
?>