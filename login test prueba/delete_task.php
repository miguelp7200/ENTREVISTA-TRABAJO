<?php
include("db.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta="DELETE FROM ingresousuarios WHERE id =$id ";
    $result = mysqli_query($conexion, $consulta);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login2.css">
    <link rel="stylesheet" href="css/cabecera2.css">
</head>
<body>
    <form action="home.php">
    <h1 class="ok">REGISTRO ELIMINADO</h1>
    <input type="submit" value ="volver a registro de usuarios">
    </form>
</body>
</html>