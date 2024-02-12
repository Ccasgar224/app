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
        include ('añadir.php');
        include ('conexion.php');
        $Nombre=$_REQUEST["Nombre"];
        $FechaNac=$_REQUEST["FechaNac"];
        $Telefono=$_REQUEST["Telefono"];

        $consulta="INSERT INTO alumno(Nombre,FechaNacimiento,Telefono) VALUES ('$Nombre','$FechaNac','$Telefono')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>