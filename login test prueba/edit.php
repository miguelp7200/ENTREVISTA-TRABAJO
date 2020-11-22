<?php
include("db.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $consulta="SELECT * FROM ingresousuarios WHERE id = $id ";      
    $result = mysqli_query($conexion, $consulta); 

        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_array($result);
            $iduser=$row['id'];
            $nombreuser=$row['nombres'];
            $docuser=$row['documento'];
            $teluser=$row['telefono'];
            $diruser=$row['direccion'];
            $serviciouser=$row['servicio_ubicacion'];
            $famuser=$row['nombrefamiliar'];
            $docfamuser=$row['documentofamiliar'];
        }         
   
    }  

    if (isset($_POST['EDITAR'])){        
            $iduser2=$_POST['id'];
            $nombreuser2=$_POST['nombres'];
            $docuser2=$_POST['documento'];
            $teluser2=$_POST['telefono'];
            $diruser2=$_POST['direccion'];
            $serviciouser2=$_POST['servicio_ubicacion'];
            $famuser2=$_POST['nombrefamiliar'];
            $docfamuser2=$_POST['documentofamiliar'];            
            $consulta2= "UPDATE `ingresousuarios` SET `nombres` = '$nombreuser2', `documento` = '$docuser2', `telefono` = '$teluser2', `direccion` = '$diruser2', `servicio_ubicacion` = '$serviciouser2', `nombrefamiliar` = '$famuser2', `documentofamiliar` = '$docfamuser2' WHERE `ingresousuarios`.`id` = $iduser2";
            mysqli_query($conexion, $consulta2);
            header("location: home.php");
            
    }
    
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login2.css">
        <link rel="stylesheet" href="css/cabecera.css">
    </head>
    <body>
        
                <h1 class="ok">PUEDE EDITAR</h1>
                   
                     <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
                        <input type="hidden" placeholder="id del usuario"name="id" value=<?php echo $iduser;?> >
                        <LAbel for="nombre">NOMBRE USUARIO</LAbel>
                        <input type="text" placeholder="ingrese nombre del usuario"name="nombres" value=<?php echo $nombreuser;?> >
                        <LAbel for="documento">NUMERO DOCUMENTO</LAbel>
                        <input type="text" placeholder="ingrese numero de documento usuario"name="documento"value=<?php echo $docuser;?> >
                        <LAbel for="telefono">NUMERO TELEFONO</LAbel>
                        <input type="text" placeholder="ingrese su numero de telefono"name="telefono" value=<?php echo $teluser;?>>
                        <LAbel for="direccion">DIRECCION USUARIO</LAbel>
                        <input type="text" placeholder="ingrese su direccion de residencia"name="direccion"value=<?php echo $diruser;?> >
                        <LAbel for="servicio_ubicacion">SERVICIO O UBICACION USUARIO</LAbel>
                        <input type="text" placeholder="ingrese el servicio o ubicacion del usuario"name="servicio_ubicacion" value=<?php echo $serviciouser;?>>
                        <LAbel for="nombrefamiliar">NOMBRE FAMILIAR DEL USUARIO</LAbel>
                        <input type="text" placeholder="ingrese nombre del familiar"name="nombrefamiliar" value=<?php echo $famuser;?>>
                        <LAbel for="documentofamiliar">NUMERO DE DOCUMENTO FAMILIAR</LAbel>
                        <input type="text" placeholder="ingrese numero documento familiar"name="documentofamiliar" value=<?php echo $docfamuser;?>>   
                        <input type="submit"name="EDITAR" value ="EDITAR">
                        </form>
                        <form action="home.php">

                            <input type="submit" value ="volver a registro de usuarios">
                            
                        </form>
                        
                   
                </h1>

    </body>
</html>