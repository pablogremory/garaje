<?php
	$id = $_GET['id'];
	require 'conexion.php';

	$sql = "SELECT * FROM vehiculos where id_v=$id";
	$resultado = $mysqli->query($sql);
	$fila = $resultado->fetch_assoc();

	$sql2 = "SELECT * FROM plaza where id_v=$id";
	$resultado2 = $mysqli->query($sql2);
	$fila2 = $resultado2->fetch_assoc();
	
	$matricula = $fila['matricula'];
	$marca = $fila['marca'];
	$disponibilidad = $fila2['disponibilidad'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="styles.css">	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.dataTables.min.js" ></script>
	
    <title>Registro</title>
</head>
<body>
		<div class="container">
			<div class="row">
			<h2>Registro de coche</h2>
			</div>
			<p>Añade la marca, la matrícula y seleccione si ya tiene plaza o no</p>
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="modificar2.php" id="registro" name="registro" autocomplete="off" method="post">

						<label for="Marca">Marca:</label><input type="text" class="form-control" name="marca" maxlength="50" id="marca" value="<?php echo $marca?>" required>
                        <label for="Matrícula">Matrícula:</label><input type="number" class="form-control" name="matricula" maxlength="50" id="matricula" value="<?php echo $matricula?>" required>
						<br>
						¿Asignar Plaza?
						<input type="hidden" name="id" maxlength="50" id="id" value="<?php echo $id; ?>" required>
						<select class="form-select" name="disponibilidad" aria-label="Default select example">
							<option value="0"<?php 
							if( $disponibilidad == 0 ){
							echo "selected";
							};
							?>>No</option>
							<option value="1"<?php 
							if( $disponibilidad == 1 ){
							echo "selected";
							};
							?>>Si</option>
						</select>
						<div class="form-group">
						<button type="submit" class="btn btn-primary">Registrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>			