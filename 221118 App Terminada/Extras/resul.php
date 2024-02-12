<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to right, #fc5656, #888686);
            font-size: 30px;
        }
        body a{
            text-decoration: none;
        }
        body a:hover{
            color:orange;
        }
    </style>
</head>
<body>
    <?php
        $conexion = mysqli_connect ("localhost","cristian","cristiandaw","instituto") or die ("No se puede conectar a la base de datos");

        $opcion=$_REQUEST["consulta"];

        switch($opcion)
        {
            case 1:
                    $consulta = "SELECT * FROM alumno WHERE (YEAR(now())-YEAR(fechaNacimiento)>22)";
                    //Envío de la consulta
                    $res = mysqli_query($conexion,$consulta) or die("Consulta incorrecta");

                    //Procesamiento de los datos
                    $n_filas = mysqli_num_rows ($res);

                    //Generación de código HTML
                    echo "<center><h1> Alumnos con 30 años o más</h1></center>";
                    echo "<table align=center>\n";
                    echo "<tr bgcolor=#ffffaa>
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Fecha Nac</th>
                        <th>Telf</th>
                        </tr>\n";

                    for($i=1;$i<=$n_filas; $i++)
                    {
                        $fila = mysqli_fetch_array($res);
                        echo "<tr>\n";
                        echo "<td>".$fila['NumMatricula']."</td>\n";
                        echo "<td>".$fila['Nombre']."</td>\n";
                        echo "<td>".$fila['FechaNacimiento']."</td>\n";
                        echo "<td>".$fila['Telefono']."</td>\n";
                    }

                    echo "</tr></table>";
                    mysqli_free_result($res);

                    //Se cierra la conexión
                    mysqli_close($conexion);
                    break;
            case 2:
                    $consulta = "SELECT Nombre FROM asignatura WHERE IdProfesor=(SELECT IdProfesor FROM profesor WHERE Nombre='Javi')";
                            //Envío de la consulta
                    $res = mysqli_query($conexion,$consulta) or die("Consulta incorrecta");

                    //Procesamiento de los datos
                    $n_filas = mysqli_num_rows ($res);

                    //Generación de código HTML
                    echo "<center><h1> Nombre de la asignatura que imparte el profesor Javi</h1></center>";
                    echo "<table align=center>\n";
                    echo "<tr bgcolor=#ffffaa>
                        <th>Nombre</th>
                        </tr>\n";

                    for($i=1;$i<=$n_filas; $i++)
                    {
                        $fila = mysqli_fetch_array($res);
                        echo "<tr>\n";
                        echo "<td>".$fila['Nombre']."</td>\n";
                    }
                    echo "</tr></table>";
                    mysqli_free_result($res);

                    //Se cierra la conexión
                    mysqli_close($conexion);
                    break;
            case 3:
                    $consulta = "SELECT CodAsignatura, Nombre FROM asignatura WHERE EXISTS(SELECT IdProfesor FROM profesor WHERE profesor.IdProfesor=asignatura.IdProfesor)";
                            //Envío de la consulta
                    $res = mysqli_query($conexion,$consulta) or die("Consulta incorrecta");

                    //Procesamiento de los datos
                    $n_filas = mysqli_num_rows ($res);

                    //Generación de código HTML
                    echo "<center><h1>Código y nombre de la asignatura que es impartida por algún profesor</h1></center>";
                    echo "<table align=center>\n";
                    echo "<tr bgcolor=#ffffaa>
                        <th>CodAsignatura</th>
                        <th>Nombre</th>
                        </tr>\n";

                    for($i=1;$i<=$n_filas; $i++)
                    {
                        $fila = mysqli_fetch_array($res);
                        echo "<tr>\n";
                        echo "<td>".$fila['CodAsignatura']."</td>\n";
                        echo "<td>".$fila['Nombre']."</td>\n";
                    }
                    echo "</tr></table>";
                    mysqli_free_result($res);

                    //Se cierra la conexión
                    mysqli_close($conexion);
                    break;
        }  
    ?>

    <a href="../principal.html"><center>Volver a la página principal</center></a>
    <a href="main.php"><center>Volver a consultas</center></a>
</body>
</html>