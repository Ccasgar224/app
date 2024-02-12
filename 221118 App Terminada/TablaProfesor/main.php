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
            color: orange;
        }
        body a:hover{
            color:lightgrey;
        }
    </style>
        
</head>
<body>
    <?php
        include('conexion.php');
        //Preparación de la consulta
        $consulta = "SELECT * FROM profesor;";

        //Envío de la consulta
        $res = mysqli_query($conexion,$consulta) or die("Consulta incorrecta");

        //Procesamiento de los datos
        $n_filas = mysqli_num_rows ($res);

        //Generación de código HTML
        echo "<center><h1> Listado de profesores</h1></center>";
        echo "<table align=center border='1'>\n";
        echo "<tr bgcolor=#ffffaa>
            <th>IDProfesor</th>
            <th>NIF</th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Telf</th>
            </tr>\n";

        for($i=1;$i<=$n_filas; $i++)
        {
            $fila = mysqli_fetch_array($res);
            echo "<tr>\n";
            echo "<td>".$fila['IdProfesor']."</td>\n";
            echo "<td>".$fila['NIF_P']."</td>\n";
            echo "<td>".$fila['Nombre']."</td>\n";
            echo "<td>".$fila['Especialidad']."</td>\n";
            echo "<td>".$fila['Telefono']."</td>\n";
            //Aquí añadir y elminiar
            echo "<td><a href=modificar.php?id=".$fila['IdProfesor'].">Modificar</a>";
            echo "<td><a href=eliminar.php?id=".$fila['IdProfesor'].">Eliminar</a>";

        }

        echo "<tr><td colspan=7> <hr>";
        echo "<a href='añadir.php'>Añadir profesor</a>";
        echo "</td></tr></table>";
        mysqli_free_result($res);

        //Se cierra la conexión
        mysqli_close($conexion);
    ?>
    <a href="../principal.html"><center>Volver a la página principal</center></a>
</body>
</html>