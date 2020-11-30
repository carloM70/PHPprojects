<html>
<head>
<title>VERIFICACION DE ESTADO</title>
<style type="text/css">
body{
background-image: url('http://todofondos.com/bin/fondos/05/60/37d.jpg');
background-repeat : no-repeat;
background-attachment : fixed;
background-position : center;
background-size: auto 100%;
}
</style> 
</head>
<body>
<div style="position:absolute;top:100px;left:200px">

<?php
$pagina = $_GET['IP'];
//$pagina = "www.google.com";
$comando = "ping /n 1 $pagina";
$salida = shell_exec($comando);
$array = explode("=",$salida);
if ($array[9]==null){
 echo "no hay conexion con la pagina $pagina.";
}
else {
 echo "El enlace $pagina esta activo.<br>\n";
 echo "El tiempo medio aproximado de ida y vuelta es $array[9].";
}
?>

</div>
</body>
</html>