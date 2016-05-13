 * @author anael hernadez rivera
 * @version 1.0 
<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="golescata.css"> 
     <meta charset="utf-8">
    <title>catalogo de equipo</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
  <body>
<?php
include_once('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
if (isset($_GET['id_us'])){
  $id=$_GET['id_us'];

$consulta = "SELECT * FROM jugadores where id=$id";
$result = $cone->query($consulta);
$fila = $result->fetch_row();
$s="";
$id=$fila[0];
$Jugador=$fila[1];
$Equipo=$fila[2];

}else{
$s="s";
$id="";
$Equipo="";
$Jugador="";


}


include_once('jugadoresactualiza.php');
//echo $_POST["id"];
if (isset($_POST['id'])){
$actualizado=new  actualiequipo($_POST["id"], $_POST["Jugador"], $_POST["Equipo"]);
$actualizado->actualiza();
}

elseif (isset($_POST["ids"])){
$actualizado=new  actualiequipo($_POST["ids"], $_POST["Jugador"], $_POST["Equipo"]);
$actualizado->guardar();
}
  elseif(isset($_GET["borrar"])){
  $actualizado=new  actualiequipo($_GET["borrar"],0,0,0);
$actualizado->eliminar();
}



?>  

    <div class="contenedor">
  
      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="jugadorescatalogo.php" method="POST">

          <div class="fieldset">
            <p><label for="text">Equipo</label></p>                  
            <p><input type="text" id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>

            <p><label for="text">Capitan</label></p>
            <p><input type="text" id="Jugados" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>

            <input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>">

<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>

          </div>

        </form>

      </div> <!-- end login -->

    </div>
  </body>	
</html>