<?php
    require_once('enlacdb.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body background='estado8.jpg'>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'HISTORIAL GRAFICO'
    },
    xAxis: {
    title: {
        text: 'HORA [hrs:min:seg] Y FECHA [dia/mes/año]'
    },
        categories: [
        <?php

           $sql = "select * from $pagn";
            $result = $conn->query($sql);
            while ( $fila = $result->fetch_array()){
        ?>
         '<?php echo $fila['hora']," de ",$fila['fecha']?>', 
        <?php
            }
        ?>]
    },
    yAxis: {
        title: {
            text: 'TIEMPO MEDIO [ms]'
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
        name: 'tiempo medio de ida y vuelta',
        data: [
        <?php
            $sql = "select * from $pagn";
            $result = $conn->query($sql);
            while ( $columna = $result->fetch_array()){
        ?>
        <?=$columna['vel']?>, 
        <?php
            }
        ?>]
    }]
});
		</script>
	</body>
</html>
