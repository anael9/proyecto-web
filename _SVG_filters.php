
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/serial.js" type="text/javascript"></script>
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

        var chart = AmCharts.makeChart("chartdiv", {
              "type": "serial",
              "fontFamily": "Lato",
              "autoMargins": true,
              "addClassNames": true,
              "zoomOutText": "",
              "defs": {
                "filter": [{
                  "x": "-50%",
                  "y": "-50%",
                  "width": "200%",
                  "height": "200%",
                  "id": "blur",
                  "feGaussianBlur": {
                    "in": "SourceGraphic",
                    "stdDeviation": "50"
                  }
                }, {
                  "id": "shadow",
                  "width": "150%",
                  "height": "150%",
                  "feOffset": {
                    "result": "offOut",
                    "in": "SourceAlpha",
                    "dx": "2",
                    "dy": "2"
                  },
                  "feGaussianBlur": {
                    "result": "blurOut",
                    "in": "offOut",
                    "stdDeviation": "10"
                  },
                  "feColorMatrix": {
                    "result": "blurOut",
                    "type": "matrix",
                    "values": "0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0"
                  },
                  "feBlend": {
                    "in": "SourceGraphic",
                    "in2": "blurOut",
                    "mode": "normal"
                  }
                }]
              },
              "fontSize": 15,

              "dataProvider": chartData,
              "dataDateFormat": "YYYY",
              "marginTop": 0,
              "marginRight": 0,
              "marginLeft": 0,
              "autoMarginOffset": 0,
              "categoryField": "year",
              "categoryAxis": {
                "gridAlpha": 0.07,
                "axisColor": "#DADADA",
                "startOnAxis": true,
                "tickLength": 0,
                "parseDates": true,
                "minPeriod": "YYYY"
              },
              "valueAxes": [{
                "stackType": "regular",
                "gridAlpha": 0.07,
                "axisAlpha": 0,
                "inside": true,
                "labelFrequency": 2
              }],
              "graphs": [{
                "id": "g1",
                "type": "line",
                "title": "Cars",
                "valueField": "cars",
                "fillColors": [
                  "#0066e3",
                  "#802ea9"
                ],
                "lineAlpha": 0,
                "fillAlphas": 0.8,
                "showBalloon": false
              }, {
                "id": "g2",
                "type": "line",
                "title": "Motorcycles",
                "valueField": "motorcycles",
                "lineAlpha": 0,
                "fillAlphas": 0.8,
                "lineColor": "#5bb5ea",
                "showBalloon": false
              }, {
                "id": "g3",
                "title": "Bicycles",
                "valueField": "bicycles",
                "lineAlpha": 0.5,
                "lineColor": "#FFFFFF",
                "bullet": "round",
                "dashLength": 2,
                "bulletBorderAlpha": 1,
                "bulletAlpha": 1,
                "bulletSize": 15,
                "stackable": false,
                "bulletColor": "#5d7ad9",
                "bulletBorderColor": "#FFFFFF",
                "bulletBorderThickness": 3,
                "balloonText": "<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>"
              }],
              "chartCursor": {
                "cursorAlpha": 1,
                "zoomable": false,
                "cursorColor": "#FFFFFF",
                "categoryBalloonColor": "#8d83c8",
                "fullWidth": true,
                "categoryBalloonDateFormat": "YYYY",
                "balloonPointerOrientation": "vertical"
              },
              "balloon": {
                "borderAlpha": 0,
                "fillAlpha": 0,
                "shadowAlpha": 0,
                "offsetX": 40,
                "offsetY": -50
              }
            });

        </script>
        
            <div id="chartdiv" style="width:100%; height:500px;"></div>
    