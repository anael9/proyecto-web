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
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
+        <div class="modal-dialog">
+            <div class="modal-content">
+                <div class="modal-header">
+                    <button type="button" class="close" data-dismiss="modal">Close</button>
+                   
+                </div>
+                <div class="ct">
+              
+                </div>
+
+            </div>
+        </div>
+    </div>
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
         
         <a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $fila[0]; ?>"><button type="submit" class="button" data-target="#exampleModal" style="margin-bottom: 30%;"><span>Agregar</span></button></a>
+ 
+   </div>
+      <!-- jQuery Version 1.11.0 -->
+    <script src="js/jquery-latest.min.js"></script>
+
+    <!-- Bootstrap Core JavaScript -->
+    <script src="js/bootstrap.min.js"></script>
+
+    <script>
+    $('#exampleModal').on('show.bs.modal', function (event) {
+          var button = $(event.relatedTarget) // Button that triggered the modal
+          var recipient = button.data('whatever') // Extract info from data-* attributes
+          var modal = $(this);
+          var dataString = 'id_us=' + recipient;
+
+            $.ajax({
+                type: "GET",
+                url: "fusuario22.php",
+                data: dataString,
+                cache: false,
+                success: function (data) {
+                    console.log(data);
+                    modal.find('.ct').html(data);
+                },
+                error: function(err) {
+                    console.log(err);
+                }
+            });  
+    })
+    </script> 

      </div>
  </body>	

</html>