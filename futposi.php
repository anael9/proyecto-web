<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="futposi.css"> 
     <meta charset="utf-8">
    <title>posicion</title>
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

$consul = "SELECT * FROM posicionfut";
$result = $cone->query($consul);
$fila = $result->fetch_row();
$s="";
$id=$fila[0];
$Equipo=$fila[1];
$Jugados=$fila[2];
$Ganados=$fila[3];
$Empatados=$fila[4];
$Perdidos=$fila[5];
$gfavor=$fila[6];
$gcontra=$fila[7];
$Diferencia=$fila[8];
$Puntos=$fila[9];


}else{
$s="s";
$id="";
$Equipo="";
$Jugados="";
$Ganados="";
$Empatados="";
$Perdidos="";
$gfavor="";
$gcontra="";
$Diferencia="";
$Puntos="";

}


if (isset($_POST['submit'])) {

    $consulta = "INSERT into posicionfut values('', '$Equipo', '$Jugados', '$Ganados', '$Empatados', '$Perdidos', '$gfavor', '$gcontra', '$Diferencia', '$Puntos') ";
      if ($cone->query($consulta)){
        header("Location: catalogofutbol.php");
                      }
      
      
    }

include_once('actualiza.php');
if(isset($_POST["id"])){
$actualizado=new  actualizaposicion($_POST["Equipo"],$_POST["Jugados"],$_POST["Ganados"], $_POST["Empatados"], $_POST["Perdidos"], $_POST["Favor"], $_POST["contra"], $_POST["Diferencia"], $_POST["Puntos"]);
$actualizado->actualiza();
}

elseif (isset($_POST["ids"])){
$actualizado=new  actualizaposicion($_POST["Equipo"],$_POST["Jugados"],$_POST["Ganados"], $_POST["Empatados"], $_POST["Perdidos"], $_POST["Favor"], $_POST["contra"], $_POST["Diferencia"], $_POST["Puntos"]);
$actualizado->guardar();
}

elseif(isset($_GET["borrar"])){
$actualizado=new  actualizaposicion($_GET["borrar"],0,0,0,0);
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

            <p><label for="text">Jugados</label></p>
            <p><input type="text" id="Jugados" name="Jugados" placeholder="Jugados" value="<?php echo $Jugados?>"></p>

            <p><label for="text">Ganados</label></p>
            <p><input type="text" id="Ganados" name="Ganados" placeholder="Ganados" value="<?php echo $Ganados?>"></p>

            <p><label for="text">Empatados</label></p>
            <p><input type="text" id="Empatados" name="Empatados" placeholder="Empatados" value="<?php echo $Empatados?>"></p>

            <p><label for="text">Perdidos</label></p>
            <p><input type="text" id="Perdidos" name="Perdidos" placeholder="Perdidos" value="<?php echo $Perdidos?>"></p>

            <p><label for="text">Favor</label></p>
            <p><input type="text" id="Favor" name="Favor" placeholder="Favor" value="<?php echo $gfavor?>"></p>

            <p><label for="text">contra</label></p>
            <p><input type="text" id="contra" name="contra" placeholder="contra" value="<?php echo $gcontra?>"></p>

            <p><label for="text">Diferencia</label></p>
            <p><input type="text" id="Diferencia" name="Diferencia" placeholder="Diferencia" value="<?php echo $Diferencia?>"></p>

            <p><label for="text">Puntos</label></p>
            <p><input type="text" id="Puntos" name="Puntos" placeholder="Puntos" value="<?php echo $Puntos?>"></p>
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