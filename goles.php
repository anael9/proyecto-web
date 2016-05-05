<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>goles</title>
    
    
    
        <link rel="stylesheet" href="goles.css"> 
        <link rel="stylesheet" href="catalogofutbol.css">

    <script type="text/javascript" src="jquery.js"></script>
     <meta charset="utf-8">



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    
  </head>


    
  

  <body>
<?php
if (isset($_POST['id'])){
$Equipo=$_POST["Equipo"];
$Jugador=$_POST["Jugador"];
$Juego=$_POST["Juego"];
$Minuto=$_POST["Minuto"];
$idjugador=$_POST["idjugador"];
$idequipo=$_POST["idequipo"];
$idjuego=$_POST["idjuego"];
}else{
$Equipo="";
$Jugador="";
$Juego="";
$Minuto="";
$idjugador="";
$idequipo="";
$idjuego="";
}
?>

     <div class="contenedor">
       <!--reporte-->

      

       <div id="Buscar">

        <h2><span class="fontawesome-lock"></span>Buscar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><input type="text" id="Equipo" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>
            <p><input type="text" id="Jugador" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>
            <p><input type="text" id="Juego" name="Juego" placeholder="Juego" value="<?php echo $Juego?>"></p>
            <p><input type="text" id="Minuto" name="Minuto" placeholder="Minuto" value="<?php echo $Minuto?>"></p>
            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
            <p><input type="submit" name="submit" value="buscar"></p>


          </fieldset>

        </form>

      </div> <!-- end login -->
 <!--tabla-->
      <div id="login" class="posicion">

        <h2><span class="fontawesome-lock"></span>Goles</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
        <tr>
          <th>Lugar</th>
          <th>Equipo</th>
          <th>Jugador</th>
          <th>Juego</th>
          <th>Minuto</th>
          <th>id_Jugador</th>
          <th>id_equipo</th>
          <th>Opciones</th>
        </tr>

      <?php
include_once('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();

$consulta = "SELECT * from goles";
$resultado = $cone->query($consulta);
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td><td>".$fila[7]."</td>
<td><center>
<a href=golescatalogo.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualizagoles.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 />
</center></td>";
echo "</tr>";  

}
echo "</table>";
?>  

  
        <form action="#" method="POST">
          <fieldset>
          <p><a href="golescatalogo.php"><input type="button" id="guardar1" name="guardar" value="nuevo"></p></a>
          </fieldset>
        </form>
      </div>
  </body>	

</html>