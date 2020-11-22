<?php include("db.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO USUARIOS</title>
    <link rel="stylesheet" href="css/login3.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <script src="https://kit.fontawesome.com/61c17dc7eb.js" crossorigin="anonymous"></script>
</head>
<body>
<h1>REGISTRO USUARIOS</h1>

<form action="save_task.php"  method="post">
<LAbel for="nombre">NOMBRE USUARIO</LAbel>
<input type="text" placeholder="ingrese nombre del usuario"name="nombres" >
<LAbel for="documento">NUMERO DOCUMENTO</LAbel>
<input type="text" placeholder="ingrese numero de documento usuario"name="documento" >
<LAbel for="telefono">NUMERO TELEFONO</LAbel>
<input type="text" placeholder="ingrese su numero de telefono"name="telefono" >
<LAbel for="direccion">DIRECCION USUARIO</LAbel>
<input type="text" placeholder="ingrese su direccion de residencia"name="direccion" >
<LAbel for="servicio_ubicacion">SERVICIO O UBICACION USUARIO</LAbel>
<input type="text" placeholder="ingrese el servicio o ubicacion del usuario"name="servicio_ubicacion" >
<LAbel for="nombrefamiliar">NOMBRE FAMILIAR DEL USUARIO</LAbel>
<input type="text" placeholder="ingrese nombre del familiar"name="nombrefamiliar" >
<LAbel for="documentofamiliar">NUMERO DE DOCUMENTO FAMILIAR</LAbel>
<input type="text" placeholder="ingrese numero documento familiar"name="documentofamiliar" >
<input type="submit" value ="GUARDAR">
</form>
<table>
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>NUMERO DE DOCUMENTO</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th>SERVICIO</th>
            <th>NOMBRE FAMILIAR</th>
            <th>DOCUMENTO FAMILIAR</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $consulta="SELECT * FROM ingresousuarios";
        $result_usuarios = mysqli_query($conexion, $consulta);
        while($row = mysqli_fetch_array($result_usuarios)){?>
        <tr>
            <td><?php echo $row["nombres"]?></td>
            <td><?php echo $row["documento"]?></td>
            <td><?php echo $row["telefono"]?></td>
            <td><?php echo $row["direccion"]?></td>
            <td><?php echo $row["servicio_ubicacion"]?></td>
            <td><?php echo $row["nombrefamiliar"]?></td>
            <td><?php echo $row["documentofamiliar"]?></td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"]?>"> 
                    <i class ="fas fa-marker"></i>
                </a>
                <a href="delete_task.php?id=<?php echo $row["id"]?>"> 
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>

        </tr>

        <?php }?>

    </tbody>
</table>

   </body>
</html>