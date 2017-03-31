<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	

	<link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
    crossorigin="anonymous">

   
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" 
    crossorigin="anonymous">

	<title>SISTEMA DE LOGUEO</title>
	

</head>

<body>

	
  <div>

	<a href="#ventana1" class="btn btn-primary" data-toggle="modal">Ingresar</a>

		<div class="modal fade" id="ventana1">
			
			<div class="modal-dialog">
				
				<div class="modal-content">
					
					<div class="modal-header-success text-center">
						 
						 <button tyle="button" class="close" data-dismiss="modal" 
						 aria-hidden="true">&times;</button>
						 <h3>SISTEMA DE INGRESO</h3>
						 <img src="img/logo1.png" alt="" align="center" class="img-circle" 
						 height="80" width="80">
						 
					</div>


					<div class="modal-body">

						<div class="container">
						
							<form action="verificar.php" method="post" 
							class="navbar-form yo" role="search">

								<h4 class="">Ingrese Ahora !!</h4>								 

								<div class="form-group"><br>

									<input type="text" name="usu" class="form-control yo" 
									    placeholder="Usuario" required><br><br>
									    
									<input type="password" name="contra" class="form-control yo" 
									    placeholder="Contraseña" required><br><br>
									    
									<button class="btn btn-warning yo"> INICIAR SESIÓN </button>

								</div>
							</form><br>
						</div>
												
					</div>

				</div>

			</div>

		</div>

					<a href="#ventana2" class="btn btn-primary" data-toggle="modal">Registrate</a>

		<div class="modal fade" id="ventana2">
			
			<div class="modal-dialog">
				
				<div class="modal-content">
					
					<div class="modal-header-success text-center">
						 
						 <button tyle="button" class="close" data-dismiss="modal" 
						 aria-hidden="true">&times;</button>
						 <h3>SISTEMA DE INGRESO</h3>
						 <img src="img/logo1.png" alt="" align="center" class="img-circle" 
						 height="80" width="80">
						 
					</div>


					<div class="modal-body">

						<div class="container">
							
							<form action="agregar.php" method="post" class="navbar-form" 
							role="search">

										<h4 class="">Si aún no tienes una cuenta, Por favor regístrate</h4>

									<div class="form-group"><br>
									

					                  <input type="text" name="usuario" class="form-control yo" 
					                  placeholder="Usuario" required><br><br>

					                  <input type="password" name="contrasena" class="form-control yo" 
					                  placeholder="Contraseña" required><br><br>

					                  <button class="btn btn-warning yo"> REGISTRAR </button>
					                  <button type="reset" value="Reset" class="btn btn-warning yo">LIMPIAR</button>

					              	
									</div>
						
				          	</form>
						
</div>	

							
						</div>
					


					</div>

				</div>

			</div>

	</div>

	
	<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
	crossorigin="anonymous"></script>

</body>	

</html>