<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="styles.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			
			 // Establezco conexión
			 require 'conexion.php';

			 //Obtengo los datos introducidos en el formualrio
	 
			 $matricula = $_POST['matricula'];
			 $marca = $_POST['marca'];
			 $disponibilidad = $_POST['disponibilidad'];
			 $id = $_POST['id'];
			
	 
			 $sql = "UPDATE vehiculos SET marca = '$marca', matricula = '$matricula' WHERE id_v = $id";
			 $resultado = $mysqli->query($sql);
	 
			if($resultado > 0){
				$sql = "UPDATE plaza SET disponibilidad = '$disponibilidad' WHERE id_v = $id";
				$resultado = $mysqli->query($sql);
				?>

				<div class="alert alert-primary" role="alert">
				  MODIFICACIÓN CONIFRMADA
				</div>
				<button type='primary' class='btn btn-primary' role="link" onclick="window.location='index.html'">Regresar</button>

				<?php
			}else{
				?>
				  <div class="alert alert-primary" role="alert alert-danger">
				  ERROR AL AGREGAR LA MODIFCACIÓN
				</div>
				<button type='primary' class='btn btn-primary' role="link" onclick="window.location='index.html'">Regresar</button>
				<?php
			 }
			 
			 $mysqli->close();
		?>

	</body>
</html>