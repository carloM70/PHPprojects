<?php
    require_once('conexionBD.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<form action="#" method="post">
    <input type="date" name="fecha">
</form>

		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Historial de conexion'
    },
    subtitle: {
        text: 'Fuente: Elaboracion propia'
    },
    xAxis: {
        categories: [
        <?php
            $sql = "select * from youtube";
            $result = $conn->query($sql);
            while ( $fila = $result->fetch_array()){
        ?>
        '<?php echo $fila['idtime']?>', 
        <?php
            }
        ?>]
    },
    yAxis: {
        title: {
            text: 'Tiempo promedio de respuesta (mseg)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Youtube',
        data: [
        <?php
            $sql = "select * from youtube";
            $result = $conn->query($sql);
            while ( $fila = $result->fetch_array()){
        ?>
        <?=$fila['idmax']?>, 
        <?php
            }
        ?>]
    }]
});
		</script>
	</body>
</html>