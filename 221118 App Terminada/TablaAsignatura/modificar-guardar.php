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

        $CodAsignatura=$_REQUEST["CodAsignatura"];
        $Nombre=$_REQUEST["Nombre"];
        $IdProfesor=$_REQUEST["IdProfesor"];

        $consulta="UPDATE asignatura SET 
                    Nombre='$Nombre' WHERE(CodAsignatura='$CodAsignatura')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>