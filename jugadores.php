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
          <th>ID</th>
          <th>Nombre</th>
          <th>Equipo</th>
          <th>Pocision</th>
          <th>Opciones</th>
        </tr>
      </thead>
    
        <?php
include('conectar.php');

$consulta = "SELECT * FROM jugadores";
$resultado = $mysqli->query($consulta);
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td>
<td><center>
<a href=futjugador.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualizajugador.php?borrar=".$fila[0]."><img src=imagenes/borrar.jpg width=35 height=35 />
</center></td>";
echo "</tr>";  
}
echo "</table>";

      ?>

        <form action="" method="POST">
          <fieldset>
          
          <p><a href="futjugador.php"><input type="button" id="guardar1" name="guardar1" value="nuevo"></p></a>
          </fieldset>
        </form>
      </div> <!-- end login -->

      
     <?php
         
      

     ?>
  </body>	
</html>