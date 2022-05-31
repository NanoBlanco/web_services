<?php
include 'conexion.php';
$user = $_POST['usuario'];
$pass = $_POST['pass'];

$sentencia = $db->prepare("SELECT * FROM usuarios WHERE correo = ? AND pass = ?;");
$sentencia->execute([$user, $pass]);

$resultado = $sentencia->fetch(PDO::FETCH_OBJ);
if ($resultado)
    echo json_encode($resultado,JSON_UNESCAPED_UNICODE);

$sentencia = NULL;
$db = NULL;