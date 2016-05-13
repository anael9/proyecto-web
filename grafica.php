 * @author anael hernadez rivera
 * @version 1.0 
 <!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="futposi.css"> 
     <meta charset="utf-8">
    <title>jugador</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
    <html lang="en-US">
  <body>

 <link rel="stylesheet" href="style.css" type="text/css">
        <script src="amcharts_3.20.3/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts_3.20.3/amcharts/pie.js" type="text/javascript"></script><script>
            var chart;
            var legend;
        <?php
        include_once('conectar.php');
        $conexionSacadatos = new conexion();
        $cone = $conexionSacadatos->conectarte();
        $consulta = "SELECT jugadores.jugador, count(*) as contador FROM jugadores, goles WHERE jugadores.id=goles.id_jugador group by jugadores.jugador";
        $resultado = $cone->query($consulta);
        $prefix = '';
echo "var chartData =[\n";
while ( $fila = $resultado->fetch_row() ) {
  echo $prefix . " {\n";
  echo '  "country": "' . $fila[0] . '",' . "\n";
  echo '  "litres": ' . $fila[1] . ',' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n];";
?>
            
            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "country";
                chart.valueField = "litres";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                // WRITE
                chart.write("chartdiv");
            });
        </script>
  

       <div id="chartdiv" style="width: 100%; height: 400px;"></div>
         </body>    
</html>
    
    
    
    
    
  </body>
</html>
