<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            // me conecto a la BD
            include ('conexion.php');

            // obtengo el alumno
            $matricula=$_REQUEST["id"];

            // Creo y construyo la consulta
            $consulta="DELETE FROM alumno WHERE NumMatricula='".$matricula."';";
            $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

            header("Location:main.php");
        ?>
    </body>
</html>