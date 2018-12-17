<?php 

if (isset($_COOKIE['usuario'])) {
    unset($_COOKIE['usuario']);
    unset($_SESSION['idUsuario']);
    unset($_SESSION['usuario']);
    unset($_SESSION['editar']);
    setcookie('usuario', '', time() - 3600, '/'); // empty value and old timestamp
	header("location: index.php");
}else{
	echo $_COOKIE['usuario'];
}

 ?>