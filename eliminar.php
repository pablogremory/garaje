<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Garaje - Eliminar</title>
	</head>
	<body>
		<?php
			require 'conexion.php';	
		   	$id = $_GET['id'];	
			$sql = "DELETE FROM garaje WHERE id=$id";
			$resultado = $mysqli->query($sql);
	
			if($resultado > 0){
				echo "<div class='alert alert-info' role='alert'> Se ha borrado correctamente.</div>";
				//header("location:index.php");
			} else {
				echo "<div class='alert alert-danger' role='alert'>Hubo un error y no se ha podido borrar correctamente.</div>";
	
			}
			echo "<p><a href='index.php'><button type='button' class='btn btn-success'>Volver</button></a></p>";	
			
			
		?>

	</body>
</html>