<?php
require 'conexion.php';
$sql = "select * from garaje order by nombre";
$resultado = $mysqli->query($sql);
	
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">
		
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
    <title>Garaje - Clientes</title>
</head>
<body>

<body>
		<div class="container">
			<div class="row">
				<h1>Clientes</h1>
			</div>
			<br>
			
			<table id="tabla" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Edad</th>
					</tr>
				</thead>
				<tbody>
					<?php
					 while($fila = $resultado->fetch_assoc()){
						echo "<tr>";
							echo "<td>$fila[nombre]</td>";
							echo "<td>$fila[edad]</td>";							
						echo "</tr>";
				
					}
					?>
				</tbody>
			</table>
			
		</div>
	</div>
    
</body>
</html>