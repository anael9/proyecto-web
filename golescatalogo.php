<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="golescata.css"> 
     <meta charset="utf-8">
    <title>catalogo de goles</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
  <body>
<?php
include_once('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
if (isset($_GET['id_us'])){
  $id=$_GET['id_us'];

$consul = "SELECT * FROM goles";
$result = $cone->query($consul);
$fila = $result->fetch_row();
$s="";
$id=$fila[0];
$Equipo=$fila[1];
$Jugador=$fila[2];
$Juego=$fila[3];
$Minuto=$fila[4];
$idjugador=$fila[5];
$idequipo=$fila[6];
$idjuego=$fila[7];


}else{
$s="s";
$id="";
$Equipo="";
$Jugador="";
$Juego="";
$Minuto="";
$idjugador="";
$idequipo="";
$idjuego="";

}


include_once('actualizagoles.php');
if(isset($_POST["id"])){
$actualizado=new  actualigoles($_POST["id"],$_POST["Equipo"],$_POST["Jugador"],$_POST["Juego"], $_POST["Minuto"], $_POST["idjugador"], $_POST["idequipo"], $_POST["idjuego"]);
$actualizado->actualiza();
}

elseif (isset($_POST["ids"])){
$actualizado=new  actualigoles($_POST["ids"], $_POST["Equipo"],$_POST["Jugador"],$_POST["Juego"], $_POST["Minuto"], $_POST["idjugador"], $_POST["idequipo"], $_POST["idjuego"]);
$actualizado->guardar();
}

  elseif(isset($_GET["borrar"])){
  $actualizado=new  actualigoles($_GET["borrar"],0,0,0,0,0,0,0,0);
$actualizado->eliminar();
}



?>  

    <div class="contenedor">
  
      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="golescatalogo.php" method="POST">

          <div class="fieldset">
            <p><label for="text">Equipo</label></p>                  
            <select  id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>">
            <option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >-Equipos-</option>
    <?php 

 $i=0; 
$consul="SELECT * FROM jugadores";
$result = $cone->query($consul);
    

foreach ($result as $row) 
    {
    $newid=$row['id'];
    $newname=$row['equipo'];
    
        echo " <option value='".$newid."' > ". $newname ." </option>";
        $i++;

    }
  
  ?>
</select>


            <!--<p><input type="text" id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>-->

            <p><label for="text">Jugador</label></p>
            <select type="text" id="Jugados" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>">
            <option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >-Jugadores-</option>
    <?php 

 $i=0; 
$consul2="SELECT jugador FROM jugadores where equipo='".$newname."'";
$result2 = $cone->query($consul);
    

foreach ($result2 as $row2) 
    {
    $newid2=$row2['id'];
    $newname2=$row2['jugador'];
    
        echo " <option value='".$newid2."' > ". $newname2 ." </option>";
        $i++;

    }
  
  ?>
</select>

            <p><label for="text">Juego</label></p>
            <p><input type="text" id="Juego" name="Juego" placeholder="Juego" value="<?php echo $Juego?>"></p>

            <p><label for="text">Minuto</label></p>
            <p><input type="text" id="Minuto" name="Minuto" placeholder="Minuto" value="<?php echo $Minuto?>"></p>

            <p><label for="text">idjugador</label></p>
            <p><input type="text" id="idjugador" name="idjugador" placeholder="idjugador" value="<?php echo $idjugador?>"></p>

            <p><label for="text">idequipo</label></p>
            <p><input type="text" id="idequipo" name="idequipo" placeholder="idequipo" value="<?php echo $idequipo?>"></p>

            <p><label for="text">idjuego</label></p>
            <p><input type="text" id="idjuego" name="idjuego" placeholder="idjuego" value="<?php echo $idjuego?>"></p>

            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
            <p><input type="submit" name="submit" value="Guardar"></p>


          </div>

        </form>

      </div> <!-- end login -->

    </div>
  </body>	
</html>