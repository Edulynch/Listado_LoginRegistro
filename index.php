<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	
	if(isset($_COOKIE['usuario']) && isset($_SESSION["usuario"]))
		{
			header("location: historia.php");
		}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Iniciar Sesion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<!--===============================================================================================-->
	</head>
	<body background="imagenes/bg-01.jpg">
		<form action="historia.php" method="post" id="formLogin">
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
						<form class="login100-form validate-form">
							<span class="login100-form-title p-b-33">
								Iniciar Sesion
							</span>
							<div class="wrap-input100 validate-input">
								<input class="input100" type="text" id="txtEmail" name="txtEmail" placeholder="Email">
								<span class="focus-input100-1"></span>
								<span class="focus-input100-2"></span>
							</div>
							<div class="wrap-input100 rs1 validate-input">
								<input class="input100" type="password" name="txtContrasena" placeholder="Contraseña">
								<span class="focus-input100-1"></span>
								<span class="focus-input100-2"></span>
							</div>
							<div class="container-login100-form-btn m-t-20">
								<button class="login100-form-btn">
								Iniciar
								</button>
							</div>
							
							<br />
							<div class="text-center">
								<span class="txt1">
									¿Necesitas una cuenta?
								</span>
								<a href="registrar.php" class="txt2 hov1">
									Click Aquí
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</form>
		
		<!--===============================================================================================-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="js/jquery.validate.js"></script>
		<!--===============================================================================================-->
		<script src="js/login.js"></script>
		<!--===============================================================================================-->
	</body>
</html>