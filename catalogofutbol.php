<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>futctatalogo</title>
    
    
    
    
        <link rel="stylesheet" href="catalogofutbol.css">

    <script type="text/javascript" src="jquery.js"></script>
     <meta charset="utf-8">



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    
  </head>


    <html lang="en-US">
  

  <body>

    <div class="contenedor">
 
      <div id="login" class="posicion">

        <h2><span class="fontawesome-lock"></span>Pocisiones</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
        <tr>
          <th>Lugar</th>
          <th>Equipo</th>
          <th>pj</th>
          <th>pg</th>
          <th>pe</th>
          <th>pp</th>
          <th>gf</th>
          <th>gc</th>
          <th>dif</th>
          <th>pts</th>
          <th>Opciones</th>
        </tr>
      </thead>
    
        <?php
include_once('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();

$consulta = "SELECT * FROM posicionfut";
$resultado = $cone->query($consulta);
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td><td>".$fila[7]."</td><td>".$fila[8]."</td><td>".$fila[9]."</td>
<td><center>
<a href=futposi.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualiza.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 />
</center></td>";
echo "</tr>";  
}
echo "</table>";

      ?>

        <form action="#" method="POST">
          <fieldset>
          
          <p><a href="futposi.php"><input type="button" id="guardar1" name="guardar" value="nuevo"></p></a>
          </fieldset>
        </form>
      </div> <!-- end login -->

      
     <?php
         
      

     ?>
  </body>	
</html>
    
    
    
    
    
  </body>
</html>