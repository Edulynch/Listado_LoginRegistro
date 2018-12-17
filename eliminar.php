<?php

	require_once('config.php');

	if (!isset($_SESSION)) { 
	  	session_start();
	}
	
	if(!isset($_COOKIE['usuario']) && !isset($_SESSION["usuario"]))
		{
		    header("location: index.php");
	    	exit;
		}else{

			$id = htmlspecialchars($_GET["id"]);

            $sql    = "DELETE FROM infosalud
                       WHERE idInfosalud = " . $id;

            $result = mysqli_query($conn, $sql);

		    header("location: historia.php");

		}


?>