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
    <center><h1>Añadir asignatura</h1></center>
    <form method="get" action="añadir-guardar.php">
        <table border="2" align="center" cellpadding="3" cellspacing="0">
            <tr>
                <td><div align="right">CodAsignatura</div></td>
                <td><input name="codasig" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">Nombre</div></td>
                <td><input name="nombre" type="text"></td>
            </tr>
            <tr>
                <td><div align="right">IdProfesor</div></td>
                <td><input name="idprof" type="text"></td>
            </tr>
            <tr>
                <td colspan=2>
                <div align="center">
                    <input type="submit" name="enviar" value="enviar">
                </div>
                </td>
            </tr>
            <tr>
                <td colspan=2><a href="main.php"><center>Volver</center></a></td>
            </tr>
        </table>
    </form>
</body>
</html>