<?php
require_once('config.php');
if (!isset($_SESSION)) {
session_start();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form
$txtEmail      = mysqli_real_escape_string($conn, $_POST['txtEmail']);
$txtContrasena = mysqli_real_escape_string($conn, $_POST['txtContrasena']);
$sql    = "SELECT idUsuario FROM usuarios WHERE Correo = '$txtEmail' and Contrasena = '$txtContrasena'";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
$_SESSION['usuario'] = $txtEmail;
$_SESSION['idUsuario'] = $row['idUsuario'];
setcookie('usuario', $txtEmail, time()+10*60);
}
}else {
if(!isset($_COOKIE['usuario']) || !isset($_SESSION["usuario"]))
{
header("location: index.php");
exit;
}
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Historial de Salud</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
        <!--===============================================================================================-->
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <br />
        <h1><center>Historial de Salud</center></h1>
        <br />
        <div class="container">
            <a href="agregarHistoria.php" class="btn btn-outline-success fas fa-plus-circle" style="float: right;">Agregar Nuevo Registro</a>
            <br /><br />
            <div class="row">
                <table class="table table-hover table-responsive" style="text-align: center">
                    <thead>
                        <tr>
                            <th style="text-align: center">ID</th>
                            <th style="text-align: center">Correo</th>
                            <th style="text-align: center">Peso</th>
                            <th style="text-align: center">Altura</th>
                            <th style="text-align: center">Edad</th>
                            <th style="text-align: center">IMC</th>
                            <th style="text-align: center">TMB</th>
                            <th style="text-align: center">Fecha</th>
                            <th style="text-align: center">Editar</th>
                            <th style="text-align: center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql    = "SELECT infosalud.idInfosalud,
                        usuarios.Correo,
                        infosalud.Peso,
                        infosalud.Altura,
                        TIMESTAMPDIFF(YEAR, usuarios.Nacimiento, CURDATE()) AS edad,
                        TRUNCATE(infosalud.Imc,2) AS Imc,
                        TRUNCATE(infosalud.Tmb,2) AS Tmb,
                        infosalud.Fecha
                        FROM infosalud
                        INNER JOIN usuarios
                        ON infosalud.idUsuario = usuarios.idUsuario
                        WHERE infosalud.idUsuario = '" . $_SESSION['idUsuario'] . "'";
                        $result = mysqli_query($conn, $sql);
                        //$row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $count = mysqli_num_rows($result);
                        while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        echo "<tr>
                            <td>" . $fila['idInfosalud'] . "</td>
                            <td>" . $fila['Correo'] . "</td>
                            <td>" . $fila['Peso'] . "</td>
                            <td>" . $fila['Altura'] . " cm</td>
                            <td>" . $fila['edad'] . "</td>
                            <td>" . $fila['Imc'] . "</td>
                            <td>" . $fila['Tmb'] . "</td>
                            <td>" . $fila['Fecha'] . "</td>
                            <td><a href='editarHistoria.php?editar=". $fila['idInfosalud'] ."' class='btn btn-outline-warning fas fa-edit'></a></td>
                            <td><a href='eliminar.php?id=". $fila['idInfosalud'] ."' class='btn btn-outline-danger fas fa-trash-alt'></a></td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <br /><br />
                   <a href="logout.php" class="btn btn-outline-primary fas fa-plus-circle" style="float: right;">Desconectarme</a>
            </div>
        </div>
    </body>
</html>