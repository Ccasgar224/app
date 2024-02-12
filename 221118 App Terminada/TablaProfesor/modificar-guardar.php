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

        $idprof=$_REQUEST["idprof"];
        $nif=$_REQUEST["nif"];
        $nombre=$_REQUEST["nombre"];
        $especialidad=$_REQUEST["especialidad"];
        $telefono=$_REQUEST["telefono"];

        $consulta="UPDATE profesor SET 
                    NIF_P='$nif',
                    nombre='$nombre',Especialidad='$especialidad',Telefono='$telefono' WHERE(IdProfesor='$idprof')";
        $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");

        header("Location:main.php");
    ?>
</body>
</html>