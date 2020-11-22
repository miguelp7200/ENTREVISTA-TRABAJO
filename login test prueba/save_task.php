<?php
$conexion=mysqli_connect("localhost","root","","login");
   
$nombreusuario = $_POST['nombres'];
$documentousuario = $_POST['documento'];
$telefonousuario = $_POST['telefono'];
$direccionusuario = $_POST['direccion'];
$servicioubicacion = $_POST['servicio_ubicacion'];
$nombrefamiliar = $_POST['nombrefamiliar'];
$documentofamiliar = $_POST['documentofamiliar'];
$consulta = "INSERT INTO `ingresousuarios` (`nombres`, `documento`, `telefono`, `direccion`, `servicio_ubicacion`, `nombrefamiliar`, `documentofamiliar`) VALUES ('$nombreusuario','$documentousuario', '$telefonousuario', '$direccionusuario', '$servicioubicacion', '$nombrefamiliar','$documentofamiliar')";
mysqli_query($conexion,$consulta);
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
    <h1 class="ok">REGISTRO ALMACENADO</h1>
    <input type="submit" value ="volver a registro de usuarios">
    </form>
</body>
</html>
