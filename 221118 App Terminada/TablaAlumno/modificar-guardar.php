<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexion.php');

        $matricula=$_REQUEST["NumMatricula"];
        $nombre=$_REQUEST["Nombre"];
        $FechaNacimiento=$_REQUEST["FechaNacimiento"];
        $telefono=$_REQUEST["Telefono"];

        $consulta="UPDATE alumno SET 
                    Nombre='$nombre',FechaNacimiento='$FechaNacimiento',
                    Telefono='$telefono' WHERE(NumMatricula='$matricula')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>