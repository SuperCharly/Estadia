<?php 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "estadia";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida con exito";

} catch (PDOException $e) {
    echo "Error en la conexion:". $e -> getMessage();
}
?>