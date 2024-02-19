<?php
    require 'conexion.php';
    //Se preprara y se ejecuta la sentencia
    $sql = "SELECT * FROM vehiculos";
    $resultado = $mysqli->query($sql);
    //Se extrae el registro. No se hace en bucle porque el resultado debe ser único
    $fila = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
</head>
<body>
    <form action="editar2.php" method="post">
        <input type="hidden" name="id" value="<?php echo $fila ['id'];?>">
        <p><label>Marca: <input type="text" name="marca" maxlength="50" required value="<?php echo $fila['marca'];?>"></label></p>
        <p><label>Matricula: <input type="text" name="matricula" maxlength="50" required value="<?php echo $fila['matricula'];?>"></label></p>
        <p><input type="submit" value="Actualizar"></p>
    </form>
</body>
</html>