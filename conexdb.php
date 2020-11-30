<?php 
 $pagn= $_POST['equipo_in'];
 $horai = $_POST['hora0_in'];
 $horaf = $_POST['horaf_in'];
 $fechas = $_POST['fecha'];
 $array	= explode ("-",$fechas);
 $fec	=	$array[2] . "/" . $array[1] . "/" . $array[0];
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
if ($array[0]==null || $array[1]==null || $array[2]==null || $horai>$horaf || $horai==-1 || $horaf==-1){
	die("error en la entrada a formulario.");
}
echo "$fec";
?>
