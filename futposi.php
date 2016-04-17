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
include('conectar.php');

if (isset($_GET['id_us'])){
  $id=$_GET['id_us'];

$consul = "SELECT * FROM posicionfut";
$result = $mysqli->query($consul);
$consulta = "SELECT * FROM posicionfut where posicion_id=$id";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
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


?>
    <div class="contenedor">

      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="actualiza.php" method="POST">

          <fieldset>
            <p><label for="text">Equipo</label></p>
            
            <select name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>">
             <?php    
             while ( $row = mysqli_fetch_assoc($result))
              {
              ?>
    
              <option value=" <?php echo $row['equipo'] ?> " ><?php echo $row['equipo']; ?>
               </option>
        
        <?php
    }    
    ?>     
            </select>
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