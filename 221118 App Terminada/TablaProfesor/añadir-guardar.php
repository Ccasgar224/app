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
        $idprof=$_REQUEST["idprof"];
        $nif=$_REQUEST["nif"];
        $nombre=$_REQUEST["nombre"];
        $especialidad=$_REQUEST["especialidad"];
        $telf=$_REQUEST["telf"];

        $consulta="INSERT INTO profesor VALUES ('$idprof','$nif','$nombre','$especialidad','$telf')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>