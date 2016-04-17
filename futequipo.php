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


$consulta = "SELECT * FROM equiposfut where id=$id";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
$s="";
$id=$fila[0];
$Equipo=$fila[1];
$Capitan=$fila[2];


}else{
$s="s";
$id="";
$Equipo="";
$Capitan="";


}

?>
    <div class="contenedor">

      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>

        <form action="actualizaequipo.php" method="POST">

          <fieldset>

            <p><label for="text">Equipo</label></p>
            <p><input type="text" id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>

            <p><label for="text">Capitan</label></p>
            <p><input type="text" id="Capitan" name="Capitan" placeholder="Capitan" value="<?php echo $Capitan?>"></p>

            
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
