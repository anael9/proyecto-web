<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/serial.js" type="text/javascript"></script>
        <style type="text/css">

        @import url(http://fonts.googleapis.com/css?family=Lato:200,300);

            .amcharts-graph-g1 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-graph-g2 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-cursor-fill {
                filter: url(#shadow);
            }
        </style>
               <?php
                 include_once('conectar.php');
        $conexiondatos = new conexion();
        $cone = $conexiondatos->conectarte();
        $consulta = "SELECT jugadores.jugador, count(*) as contador FROM jugadores, goles WHERE jugadores.id=goles.id group by jugadores.jugador";
        $resultado = $cone->query($consulta);
        $prefix = '';
echo "var chartData =[\n";
while ( $fila = $resultado->fetch_row() ) {
  echo $prefix . " {\n";
  echo '  "jugador": "' . $fila[0] . '",' . "\n";
  echo '  "goles": ' . $fila[1] . ',' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n];";
               ?>
               <script>
       AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "jugador";
                chart.valueField = "goles";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // WRITE
                chart.write("chartdiv");
            });
        </script>
        </head>

        <body>
            <div id="chartdiv" style="width:100%; height:500px;"></div>
        </body>

</html>