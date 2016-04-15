<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="futposi.css"> 
     <meta charset="utf-8">
    <title>jugador</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
    <html lang="en-US">
  <body>
<?php
include('conectar.php');

if (isset($_GET['id_us'])){
  $id=$_GET['id_us'];


$consulta = "SELECT * FROM jugadores where ID=$id";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
$s="";
$id=$fila[0];
$Nombre=$fila[1];
$Equipo=$fila[2];
$Posicion=$fila[3];
}
else{
$s="s";
$id="";
$Nombre="";
$Equipo="";
$Posicion="";

}




    

         if (isset($_POST['submit'])) {

    $consulta = "INSERT into jugadores values('', '$Nombre', '$Equipo', '$Posicion') ";
      if ($mysqli->query($consulta)){
        header("Location: jugadores.php");
                      }
      
      
    }

?>
    <div class="contenedor">

      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>

        <form action="actualizajugador.php" method="POST">

          <fieldset>

            <p><label for="text">Nombre</label></p>
            <p><input type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre?>" requiere=""></p>

            <p><label for="text">Equipo</label></p>
            <p><input type="text" id="Equipo" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>" requiere=""></p>

            <p><label for="text">Posicion</label></p>
            <p><input type="text" id="Posicion" name="Posicion" placeholder="Posicion" value="<?php echo $Posicion?>" requiere=""></p>

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
