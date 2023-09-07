<?php
session_start();
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_SESSION['usuario'];
    $contraseña_actual = $_POST['contraseña_actual'];
    $nueva_contraseña = $_POST['nueva_contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];

    try {
        // Obtener la contraseña actual del usuario
        $stmt = $conn->prepare("SELECT contrasena FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado && password_verify($contraseña_actual, $resultado['contrasena'])) {
            // La contraseña actual es correcta
            if ($nueva_contraseña === $confirmar_contraseña) {
                // Hash de la nueva contraseña
                $nueva_contraseña_hash = password_hash($nueva_contraseña, PASSWORD_DEFAULT);

                // Actualizar la contraseña en la base de datos
                $stmt_update = $conn->prepare("UPDATE usuarios SET contrasena = :nueva_contrasena WHERE usuario = :usuario");
                $stmt_update->bindParam(':nueva_contrasena', $nueva_contraseña_hash);
                $stmt_update->bindParam(':usuario', $usuario);
                $stmt_update->execute();

                echo "Contraseña cambiada exitosamente";
            } else {
                echo "Las contraseñas nuevas no coinciden";
            }
        } else {
            echo "Contraseña actual incorrecta";
        }
    } catch (PDOException $e) {
        echo "Error en el proceso: " . $e->getMessage();
    }
}
?>
