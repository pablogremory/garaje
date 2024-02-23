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
			<h2>!Bienvenido!</h2>
			
			</div>
			<p>Regístrate para acceder a nuestro parking</p>
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form action="registrar2.php" id="registro" name="registro" autocomplete="off" method="post">

						<label for="nombre">Nombre:</label><input type="text" class="form-control" name="nombre" maxlength="50" id="nombre" required>
                        <label for="Edad">Edad:</label><input type="number" class="form-control" name="edad" maxlength="50" id="edad" required>
						
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