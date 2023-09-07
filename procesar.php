<?php
require_once 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $usuario = $_POST['usuario'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion = $_POST['direccion'];
    $telefono_emergencia = $_POST['telefono_emergencia'];

     // Recupera el valor del nivel seleccionado
    $nivelSeleccionado = $_POST['nivel'];

    try {
        // Verificar si el correo ya existe en la base de datos
        $stmt_verificar = $conn->prepare("SELECT COUNT(*) AS cantidad FROM usuarios WHERE correo = :correo");
        $stmt_verificar->bindParam(':correo', $correo);
        $stmt_verificar->execute();

        $resultado_verificar = $stmt_verificar->fetch(PDO::FETCH_ASSOC);

        if ($resultado_verificar['cantidad'] > 0) {
            echo "El correo ya está registrado. Intente con otro correo.";
        } else {
            // Hash de la contraseña
            $contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT);

            // Insertar nuevo usuario en la base de datos
            $stmt_insertar = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena, usuario, fecha_nacimiento, direccion, telefono_emergencia, 
            nombre_tutor, telefono_tutor, telefono, nivel_id) 
            VALUES (:nombre, :correo, :contrasena, :usuario, :fecha_nacimiento, :direccion, :telefono_emergencia, 
            :nombre_tutor, :telefono_tutor, :telefono, :nivel)");

            $stmt_insertar->bindParam(':nombre', $nombre);
            $stmt_insertar->bindParam(':correo', $correo);
            $stmt_insertar->bindParam(':usuario', $usuario);
            $stmt_insertar->bindParam(':contrasena', $contraseñaHash);
            $stmt_insertar->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $stmt_insertar->bindParam(':direccion', $direccion);
            $stmt_insertar->bindParam(':telefono_emergencia', $telefono_emergencia);

            // Asigna el valor del nivel seleccionado a nivel_id
            $stmt_insertar->bindParam(':nivel', $nivelSeleccionado);

            // Verificar si se deben insertar los campos de tutor y demás campos
            if (isset($_POST['nombre_tutor']) && isset($_POST['telefono_tutor']) && isset($_POST['telefono'])) {
                $nombre_tutor = $_POST['nombre_tutor'];
                $telefono_tutor = $_POST['telefono_tutor'];
                $telefono = $_POST['telefono'];
                $stmt_insertar->bindParam(':nombre_tutor', $nombre_tutor);
                $stmt_insertar->bindParam(':telefono_tutor', $telefono_tutor);
                $stmt_insertar->bindParam(':telefono', $telefono);
            }

            $stmt_insertar->execute();

            echo "Registro exitoso";
        }
    } catch (PDOException $e) {
        echo "Error en el registro: " . $e->getMessage();
    }
}

?>
