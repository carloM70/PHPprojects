<?php
    require_once('conexdb.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body background='pr2.png'>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'REPORTE GRAFICO'
    },
    xAxis: {
    title: {
        text: 'HORA [hrs:min:seg]'
    },
        categories: [
        <?php

           $sql = "select * from $pagn where fecha='$fec' and horag>='$horai' and horag<='$horaf'";
            $result = $conn->query($sql);
            while ( $registro = $result->fetch_array()){
        ?>
        '<?php echo $registro['hora'] ?>', 
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
            $sql = "select * from $pagn where fecha='$fec' and horag>='$horai' and horag<='$horaf'";
            $result = $conn->query($sql);
            while ( $registro = $result->fetch_array()){
        ?>
        <?=$registro['vel']?>, 
        <?php
            }
        ?>]
    }]
});
		</script>
	</body>
</html>
