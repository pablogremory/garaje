<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
</head>
<body>
    <?php
        //Establezco conexion
        require 'conexion.php';

        //Obtengo el id de registro
        $marca = $_POST['marca'];
        $matricula = $_POST['matricula'];



        //Se prepara la sentencia SQL
        $sql = "UPDATE usuarios SET marca='$marca',matricula='$matricula'";
        //Se ejecuta la sentencia y se guarda el resultado en $resultado
        $resultado = $mysqli->query($sql);

        if($resultado > 0){
            echo "<p>El registro ha sido modificado correctamente</p>";

        }
        echo "<p><a href='index.php'>Volver</a></p>";
    ?>
</body>
</html>