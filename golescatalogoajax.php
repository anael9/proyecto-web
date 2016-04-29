<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="futposi.css"> 
     <meta charset="utf-8">
    <title>catalogo de goles</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
    <html lang="en-US">
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



}else{
$s="s";
$id="";
$Equipo="";
$Jugador="";
$Juego="";
$Minuto="";
$idjugador="";
$idequipo="";


}




include_once('actualizagolesajax.php');
if(isset($_POST["id"])){
$actualizado=new  actualigoles($_POST["Equipo"],$_POST["Jugador"],$_POST["Juego"], $_POST["Minuto"], $_POST["idjugador"], $_POST["idequipo"]);
$actualizado->actualiza();
}

elseif (isset($_POST["id_us"])){
$actualizado=new  actualigoles($_POST["Equipo"],$_POST["Jugador"],$_POST["Juego"], $_POST["Minuto"], $_POST["idjugador"], $_POST["idequipo"]);
$actualizado->guardar();
}

elseif(isset($_GET["borrar"])){
$actualizado=new  actualigoles($_GET["borrar"],0,0,0,0);
$actualizado->eliminar();
}



?>  
    <div class="contenedor">

      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><label for="text">Equipo</label></p>
            
            <p><select name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>">
             

            <p><input type="text" id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>

            <p><label for="text">Jugador</label></p>
            <p><input type="text" id="Jugados" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>

            <p><label for="text">Juego</label></p>
            <p><input type="text" id="Juego" name="Juego" placeholder="Juego" value="<?php echo $Juego?>"></p>

            <p><label for="text">Minuto</label></p>
            <p><input type="text" id="Minuto" name="Minuto" placeholder="Minuto" value="<?php echo $Minuto?>"></p>

            <p><label for="text">idjugador</label></p>
            <p><input type="text" id="idjugador" name="idjugador" placeholder="idjugador" value="<?php echo $idjugador?>"></p>

            <p><label for="text">idequipo</label></p>
            <p><input type="text" id="idequipo" name="idequipo" placeholder="idequipo" value="<?php echo $idequipo?>"></p>

            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
            <p><input type="submit" name="submit" value="Guardar"></p>


          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>
  </body>	
</html>
    
    
    
    
    
  </body>
</html>