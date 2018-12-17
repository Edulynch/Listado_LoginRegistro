<?php
require_once ("config.php");
if(isset($_GET["editar"])){
	if (isset($_POST['txtAltura']) && isset($_POST['txtPeso']))
		{
			$idUsuario = $conn->real_escape_string($_SESSION['idUsuario']);
			$txtAltura = $conn->real_escape_string($_POST['txtAltura']);
			$txtPeso = $conn->real_escape_string($_POST['txtPeso']);
			$txtIMC = calcularIMC($txtPeso,$txtAltura);
			

			$sqlEdad    = "SELECT TIMESTAMPDIFF(YEAR, usuarios.Nacimiento, CURDATE()) AS edad
									FROM infosalud
									INNER JOIN usuarios
									ON infosalud.idUsuario = usuarios.idUsuario
									WHERE infosalud.idUsuario = '" . $_SESSION['idUsuario'] . "'";
			$resultEdad = mysqli_query($conn, $sqlEdad);

			$fila = mysqli_fetch_array($resultEdad, MYSQLI_ASSOC);

			$txtTMB = calcularTMB($txtPeso,$txtAltura,$fila['edad']);
			
			$sql = "UPDATE infosalud 
					SET Peso = " . $txtPeso . "
					,Altura = " . $txtAltura . "
					,Imc = " . $txtIMC . "
					,Tmb = " . $txtTMB . "
					WHERE idInfosalud = " . $_SESSION['editar'];

			if ($conn->query($sql) === TRUE)
				{
					
					echo "El Registro fue Ingresado Exitosamente, con los siguientes datos: <br /><br />";
					echo "<strong>idUsuario: </strong>" . $idUsuario . "<br />";
					echo "<strong>Altura: </strong>" . $txtAltura . "<br />";
					echo "<strong>Peso: </strong>" . $txtPeso . "<br />";
					echo "<strong>IMC: </strong>" . $txtIMC . "<br />";
					echo "<strong>TMB: </strong>" . $txtTMB . "<br />";
					echo "Seras direccionado al Login en 5 segundos...<br /><br />";
					header("Refresh:5; url='historia.php'");
					echo "Si no eres redireccionado, <a href=historia.php>haz click aquí</a>...<br /><br />";
				}
			else
				{
				echo "Error: " . $sql . "<br />" . $conn->error;
				}
			$conn->close();
		}
}else {
	if (isset($_POST['txtAltura']) && isset($_POST['txtPeso']))
	{
		$idUsuario = $conn->real_escape_string($_SESSION['idUsuario']);
		$txtAltura = $conn->real_escape_string($_POST['txtAltura']);
		$txtPeso = $conn->real_escape_string($_POST['txtPeso']);
		$txtIMC = calcularIMC($txtPeso,$txtAltura);
		

		$sqlEdad    = "SELECT TIMESTAMPDIFF(YEAR, usuarios.Nacimiento, CURDATE()) AS edad
								FROM infosalud
								INNER JOIN usuarios
								ON infosalud.idUsuario = usuarios.idUsuario
								WHERE infosalud.idUsuario = '" . $_SESSION['idUsuario'] . "'";
		$resultEdad = mysqli_query($conn, $sqlEdad);

		$fila = mysqli_fetch_array($resultEdad, MYSQLI_ASSOC);

		$txtTMB = calcularTMB($txtPeso,$txtAltura,$fila['edad']);
		
		$sql = "INSERT INTO infosalud (idUsuario, Altura, Peso, Imc, Tmb) VALUES (" . $idUsuario . "," . $txtAltura . "," . $txtPeso . "," . $txtIMC . "," . $txtTMB . ")";

		if ($conn->query($sql) === TRUE)
			{
				
				echo "El Registro fue Ingresado Exitosamente, con los siguientes datos: <br /><br />";
				echo "<strong>idUsuario: </strong>" . $idUsuario . "<br />";
				echo "<strong>Altura: </strong>" . $txtAltura . "<br />";
				echo "<strong>Peso: </strong>" . $txtPeso . "<br />";
				echo "<strong>IMC: </strong>" . $txtIMC . "<br />";
				echo "<strong>TMB: </strong>" . $txtTMB . "<br />";
				echo "Seras direccionado al Login en 5 segundos...<br /><br />";
				header("Refresh:5; url='historia.php'");
				echo "Si no eres redireccionado, <a href=historia.php>haz click aquí</a>...<br /><br />";
			}
		else
			{
			echo "Error: " . $sql . "<br />" . $conn->error;
			}
		$conn->close();
	}
}
function calcularIMC($peso, $altura)
{
	return $imc = $peso / ($altura/100 * $altura/100);
}

function calcularTMB($peso, $altura, $edad)
{
	return $TMB = (10 * $peso/100) + (6.25 * $altura) - (5 * $edad) + 5;
}
?>