<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('America/Santiago');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','appweb');

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>