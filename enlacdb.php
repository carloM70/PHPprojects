<?php 
 $pagn= $_GET['ip'];
//datos de base de datos
	$host = "localhost";
	$bdat = "sistop";
	$user = "root";
	$pass = "copo";

// Uso mysqli con clases objetos
$conn = new mysqli($host,$user,$pass,$bdat);

if ($conn->connect_errno > 0){
	die("Error en conexion: ". $conn->connect_error);
}
?>
