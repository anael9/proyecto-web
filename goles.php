 * @author anael hernadez rivera
 * @version 1.0 
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Equipo</title>
    
    
        <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="equipo2.css"> 
        <link rel="stylesheet" href="equipo.css">


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
}else{
$Equipo="";
$Jugador="";
$Juego="";
$Minuto="";
}
?>
<header>
          <div class="menu" id="uno">
       <a href="juego.php"><img class="icon" src="imagenes\principal.png">
       <p class="texto">Iniio</p></a>
     </div>
     
     <div class="menu" id="dos">
       <a href="equipo.php"><img class="icon" src="imagenes\equipo.png">
       <p class="texto">Equipo</p></a>
     </div>
   
     <div class="menu" id="tres">
       <a href="jugadores.php"><img class="icon" src="imagenes\jugador.png">
       <p class="texto">Jugador</p></a>
     </div>

     <div class="menu" id="cuatro">
       <a href="goles.php"><img class="icon" src="imagenes\goles.png">
       <p class="texto">Goles</p></a>
     </div>

     <div class="menu" id="cinco">
       <a href="jornada.php"><img class="icon" src="imagenes\jugador.png">
       <p class="texto">Jornada</p></a>
     </div>

     <div class="menu" id="seis">
       <a href="registro2.php"><img class="icon" src="imagenes\usuario.png">
       <p class="texto">Jornada</p></a>
     </div>
  </header>

     <div class="contenedor">
       <!--reporte-->

      

       <div id="Buscar">

        <h2><span class="fontawesome-lock"></span>Buscar</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><input type="text" id="Equipo" name="Equipo" placeholder="Equipo" value="<?php echo $Equipo?>"></p>
            <p><input type="text" id="Jugador" name="Jugador" placeholder="Jugador" value="<?php echo $Jugador?>"></p>

            <p><input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>"></p>
            
           <input type="hidden" name="id">
  
<center><button value="1" name="env" class="button"><span>Buscar</span></button></center>


          </fieldset>

        </form>

      </div> 

         <div id="hola">

        <h2><span class="fontawesome-lock"></span>Instrucción</h2>
         
        <form action="#" method="POST">

          <fieldset>
            <p><label style="color: #5353FB;">Este formulario será el encargado de ingresar, actualizar y modificar los datos de los equipos del torneo.</label></p>
          </fieldset>

        </form>

      </div> 

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
          <th>Opciones</th>
        </tr>

      <?php
include_once('golesreportes.php');
$tablas = new Tablas($Equipo,$Jugador);
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