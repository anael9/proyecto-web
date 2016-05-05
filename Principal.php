<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Principal</title>
    
    
    
        <link rel="stylesheet" href="goles.css"> 
        <link rel="stylesheet" href="Principal.css">

    <script type="text/javascript" src="jquery.js"></script>
     <meta charset="utf-8">



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    
  </head>



  <body>
<?php
if (isset($_POST['id'])){
$Juego=$_POST["Juego"];
$Jornada=$_POST["Jugador"];
$Local=$_POST["Local"];
$Goleslocal=$_POST["Goleslocal"];
$Visitante=$_POST["Visitante"];
$Golesvisitante=$_POST["Golesvisitante"];
}else{
$Juego="";
$Jornada="";
$Local="";
$Goleslocal="";
$Visitante="";
$Golesvisitante="";
}
?>

     <div class="contenedor">
       <!--reporte-->
<div class="Informacion">
   <center><h2><span class="fontawesome-lock"></span>Buscar</h2></center>

<div id="login" class="Torneo">
<h2><span class="fontawesome-lock"></span>Buscar</h2>
  <form action="#" method="POST">

          <fieldset>
          <select>
            <option>Enero-Mayo</option>
            <option>Agosto-Diciembre</option>
          </select>
          <p><input type="submit" name="submit" value="buscar"></p>
          </fieldset>

        </form>
</div>

<div class="jornada"></div>

</div>
      

       <div id="Buscar">

        <h2><span class="fontawesome-lock"></span>Buscar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><input type="text" id="Juego" name="Juego" placeholder="Juego" value="<?php echo $Juego?>"></p>
            <p><input type="text" id="Jornada" name="Jornada" placeholder="Jornada" value="<?php echo $Jornada?>"></p>
            <p><input type="text" id="Local" name="Local" placeholder="Local" value="<?php echo $Local?>"></p>
            <p><input type="text" id="Visitante" name="Visitante" placeholder="Visitante" value="<?php echo $Visitante?>"></p>


            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
            <p><input type="submit" name="submit" value="buscar"></p>


          </fieldset>

        </form>

      </div> <!-- end login -->
 <!--tabla-->
      <div id="login" class="posicion">

        <h2><span class="fontawesome-lock"></span>Juego</h2>
      <table class="heavyTable" id="mitabla">
      <thead>
        <tr>
          <th>Juego</th>
          <th>Jornada</th>
          <th>Local</th>
          <th>Goleslocal</th>
          <th>Visitante</th>
          <th>Golesvisitante</th>
          <th>Opciones</th>
        </tr>

      <?php
class  Tablas{
function __construct($Juego, $Jornada, $Local, $Goleslocal, $Visitante, $Golesvisitante)
  {
  $this->id=$id;  
  $this->Juego=$Juego;
  $this->Jornada=$Jornada;
  $this->Local=$Local;
  $this->Goleslocal=$Goleslocal;
  $this->Visitante=$Visitante;
  $this->Golesvisitante=$Golesvisitante;
  }
public function usuarios(){
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


if ($this->Juego!=="" || $this->Jornada!=="" || $this->Local!=="" || $this->Goleslocal!=="" || $this->Visitante!=="" || $this->Golesvisitante!==""){
$consulta = "SELECT * from juego where Nombre='$this->Juego' and  jornada='$this->Jornada' or local='$this->Local' or goleslocal='$this->Goleslocal' or visitante='$this->Visitante' or golesvisitante='$this->Golesvisitante' ";
}else{
 $consulta = "SELECT * FROM juego";
}

$resultado = $cone->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td>
<td><center>
<a href=golescatalogo.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualizagoles.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 />
</center></td>";
echo "</tr>";  
}
     
 $i++;
}
}
?>  
</table>
  
        <form action="#" method="POST">
          <fieldset>
          <p><a href="golescatalogo.php"><input type="button" id="guardar1" name="guardar" value="nuevo"></p></a>
          </fieldset>
        </form>
      </div>
  </body>	

</html>