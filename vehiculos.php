<?php

$id = $_GET['id'];
require 'conexion.php';
$sql = "select * from vehiculos where id='$id'";
$resultado = $mysqli->query($sql);

$sql2 = "select * from vehiculos ";
$resultado3 = $mysqli->query($sql2);
$fila3 = $resultado3->fetch_assoc();

$sql4 = "select * from vehiculos where id='$id'";
$resultado5 = $mysqli->query($sql4);
$fila5 = $resultado5->fetch_assoc();

$sql3 = "select * from usuarios where id='$id'";
$resultado4 = $mysqli->query($sql3);
$fila4 = $resultado4->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="styles_ver.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
		<script src="js/jquery.dataTables.min.js" ></script>		
		<script>
			$(document).ready( function () {
   			 $('#tabla').DataTable();
				} );
		</script>
    <title>Vehículos de <?php echo $fila4['nombre'];?></title>
</head>
<body>
	<?php
		if($fila5){
		
	?>
		<div class="container">
			<div class="row">
				<h1>Vehiculos de <?php echo $fila4['nombre'];?></h1>
			</div>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Matrícula</th>
						<th>Plaza</th>
					</tr>
				</thead>
					<?php
					 while($fila = $resultado->fetch_assoc()){
						echo "<tr>";
							echo "<td>$fila[marca]</td>";
							echo "<td>$fila[matricula]</td>";
							//CONSULTA CON LIMIT = 1
							$sql2 = "select * from plaza where id_v=$fila[id_v]";
							$resultado2 = $mysqli->query($sql2);
							$fila2 = $resultado2->fetch_assoc();
							if( $fila2['disponibilidad'] == 1 ){
								echo "<td>$fila2[id_p]</td>";
							} else{
								echo "<td>- -</td>";
							}
							echo"<td><a href='modificar.php?id=$fila[id_v]'><button type='button' class='btn btn-warning'>Modificar Vehículo</button></td>";					

					}
				

					?>
					<?php
					
				   ?>
				</tbody>

			</table>
			
		</div>
	</div>
	<?php
	echo "<a href='añadir.php?id=$id'><button type='button' class='btn btn-warning ba'>Añadir Vehículos</button></a>";
	echo "<a href='index.html'><button type='button' class='btn btn-warning ba'>Volver a Inicio</button></a></div>";			
		}else{
				
				echo "<div class='no_vehiculo'><h1>No existe ningún registro de vehículo</h1>";
				echo "<a href='añadir.php?id=$id'><button type='button' class='btn btn-warning ba'>Añadir Vehículos</button></a>";
				echo "<a href='index.html'><button type='button' class='btn btn-warning ba'>Volver a Inicio</button></a></div>";
			}
?>

	</body>
</html>