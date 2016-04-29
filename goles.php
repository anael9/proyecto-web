<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>goles</title>
    
    
    
        <link rel="stylesheet" href="futposi.css"> 
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
}else{
$Equipo="";
$Jugador="";
$Juego="";
$Minuto="";
$idjugador="";
$idequipo="";
}
?>

     <div class="contenedor">
       <!--reporte-->

      

       <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Buscar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><input type="text" id="text" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>
            <p><input type="text" id="Jugados" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>
            <p><input type="text" id="Juego" name="Juego" placeholder="Juego" value="<?php echo $Juego?>"></p>
            <p><input type="text" id="Minuto" name="Minuto" placeholder="Minuto" value="<?php echo $Minuto?>"></p>
            <p><input type="text" id="idjugador" name="idjugador" placeholder="idjugador" value="<?php echo $idjugador?>"></p>
            <p><input type="text" id="idequipo" name="idequipo" placeholder="idequipo" value="<?php echo $idequipo?>"></p>

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
      </thead>
      <?php
include_once('reporte.php');
$tablas = new Tablas($Equipo, $Jugador, $Juego, $Minuto, $idjugador, $idequipo);
$tabla = $tablas->usuarios();
      ?>
        <form action="#" method="POST">
          <fieldset>
          <p><a href="golescatalogo.php"><input type="button" id="guardar1" name="guardar" value="nuevo"></p></a>
          </fieldset>
        </form>
      </div>
  </body>	

</html>