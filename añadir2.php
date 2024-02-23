<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			
			 // Establezco conexión
			 require 'conexion.php';

			 //Obtengo los datos introducidos en el formualrio
	 
			 $matricula = $_POST['matricula'];
			 $marca = $_POST['marca'];
			 $plaza = $_POST['plaza'];
			 
			
	 
			 //Se prepara la sentencia SQL
			  $sql = "INSERT INTO vehiculos(marca, edad) VALUES ('$nombre','$edad')";
	 
			 //Se ejecuta la sentencia y se guarda el resultado en $resultado
			$resultado = $mysqli->query($sql);
	 
			if($resultado > 0){
				?>

				<div class="alert alert-primary" role="alert">
				  REGISTRO AGREGADO
				</div>
				<button type='primary' class='btn btn-primary' role="link" onclick="window.location='index.php'">Regresar</button>

				<?php
			}else{
				?>
				  <div class="alert alert-primary" role="alert alert-danger">
				  ERROR AL AGREGAR EL REGISTRO
				</div>
				<button type='primary' class='btn btn-primary' role="link" onclick="window.location='index.php'">Regresar</button>
				<?php
			 }
			 
			 $mysqli->close();
		?>

	</body>
</html>