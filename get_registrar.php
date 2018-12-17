<?php
require_once ('config.php');

 if (isset($_POST['txtNombre']) && isset($_POST['txtApellido']) && isset($_POST['txtRUT']) && isset($_POST['txtEmail']) && isset($_POST['txtContrasena']) && isset($_POST['txtTelefono']) &&  isset($_POST['txtfechaNacimiento']))
 	{
	$txtNombre = $conn->real_escape_string($_POST['txtNombre']);
	$txtApellido = $conn->real_escape_string($_POST['txtApellido']);
	$txtRUT = $conn->real_escape_string($_POST['txtRUT']);
	$txtEmail = $conn->real_escape_string($_POST['txtEmail']);
	$txtContrasena = $conn->real_escape_string($_POST['txtContrasena']);
	$txtTelefono = $conn->real_escape_string($_POST['txtTelefono']);
	$txtfechaNacimiento = $conn->real_escape_string($_POST['txtfechaNacimiento']);

	$dt = DateTime::createFromFormat('d/m/Y', $txtfechaNacimiento);
	$date = $dt->format('Y-m-d');
	$timestamp = $dt->getTimestamp();

	$sql = "INSERT INTO usuarios (Nombre, Apellido, Rut, Correo, Contrasena, Telefono, Nacimiento) VALUES ('" . $txtNombre . "','" . $txtApellido . "','" . $txtRUT . "','" . $txtEmail . "','" . $txtContrasena . "', " . $txtTelefono . ", FROM_UNIXTIME(" . $timestamp . "))";

	if ($conn->query($sql) === TRUE)
		{

			echo "El usuario fue Registrado Exitosamente, con los siguientes datos: <br /><br />";
			echo "<strong>Nombre: </strong>" . $txtNombre . "<br />";
			echo "<strong>Apellido: </strong>" . $txtApellido . "<br />";
			echo "<strong>RUT: </strong>" . $txtRUT . "<br />";
			echo "<strong>Email: </strong>" . $txtEmail . "<br />";
			echo "<strong>Contraseña: </strong>" . $txtContrasena . "<br />";
			echo "<strong>Telefono: </strong>" . $txtTelefono . "<br />";
			echo "<strong>Fecha de Nacimiento: </strong>" . $txtfechaNacimiento . "<br /><br />";
			echo "Seras direccionado al Login en 5 segundos...<br /><br />";

			header("Refresh:5; url='index.php'");

			echo "Si no eres redireccionado, <a href=index.php>haz click aquí</a>...<br /><br />";

		}
	 else
		{
		echo "Error: " . $sql . "<br />" . $conn->error;
	}

	$conn->close();
}
?>
