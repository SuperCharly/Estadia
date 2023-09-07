<?php
require_once 'conexion.php';  // Incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    try {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        $usuarioEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioEncontrado && password_verify($contraseña, $usuarioEncontrado['contrasena'])) {
            // Iniciar sesión y almacenar el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            // Inicio de sesión exitoso, redirigir al usuario a otra página
            header("Location: cambiar_contraseña.html");  // Cambiar "dashboard.php" por la URL deseada
            exit;  // Asegura que el script se detenga después de la redirección
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}
?>
