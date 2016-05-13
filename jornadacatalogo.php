 * @author anael hernadez rivera
 * @version 1.0 
<!DOCTYPE html>
<html >
  <head>
        <link rel="stylesheet" href="golescata.css"> 
     <meta charset="utf-8">
    <title>catalogo de Jornada</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">  
  </head>
  <body>
<?php
include_once('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
if (isset($_GET['id_us'])){
  $id=$_GET['id_us'];

$consulta = "SELECT * FROM jornada where id=$id";
$result = $cone->query($consulta);
$fila = $result->fetch_row();
$s="";
$id=$fila[0];
$Nombre=$fila[1];
}else{
$s="s";
$id="";
$Nombre="";

}


include_once('jornadaactualiza.php');
//echo $_POST["id"];
if(isset($_POST['id'])){
$actualizado=new  actualiequipo($_POST["id"], $_POST["Nombre"]);
$actualizado->actualiza();
}
elseif (isset($_POST["ids"])){
$actualizado=new  actualiequipo($_POST["ids"], $_POST["Nombre"]);
$actualizado->guardar();
}
  elseif(isset($_GET['borrar'])){
  $actualizado=new  actualiequipo($_GET["borrar"],0);
$actualizado->eliminar();
}



?>  

    <div class="contenedor">
  
      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="jornadacatalogo.php" method="POST">

          <div class="fieldset">
            <p><label for="text">Equipo</label></p>                  
            <p><input type="text" id="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre?>" require=""></p>
            <input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>">

<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>

          </div>

        </form>

      </div> <!-- end login -->

    </div>
  </body>	
</html>