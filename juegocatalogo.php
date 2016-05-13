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

$consulta = "SELECT * FROM goles where id=$id";
$result = $cone->query($consulta);
$fila = $result->fetch_row();
$s="";
$id=$fila[0];
$Nombre=$fila[1];
$Jornada=$fila[2];
$Local=$fila[3];
$Glocal=$fila[4];
$Visitante=$fila[5];
$Gvisitante=$fila[6];
}else{
$s="s";
$id="";
$Nombre="";
$Jornada="";
$Local="";
$Glocal="";
$Visitante="";
$Gvisitante="";
}

include_once('juegoactualiza.php');
//echo $_POST["id"];
if(isset($_POST["id"])){
$actualizado=new  actualiequipo($_POST["id"], $_POST["Nombre"], $_POST["Jornada"], $_POST["Local"], $_POST["Glocal"], $_POST["Visitante"], $_POST["Gvisitante"]);
$actualizado->actualiza();
}

elseif (isset($_POST["ids"])){
$actualizado=new  actualiequipo($_POST["ids"], $_POST["Equipo"], $_POST["Jornada"], $_POST["Local"], $_POST["Glocal"], $_POST["Visitante"], $_POST["Gvisitante"]);
$actualizado->guardar();
}
  elseif(isset($_GET["borrar"])){
  $actualizado=new  actualiequipo($_GET["borrar"],0,0,0,0,0,0);
$actualizado->eliminar();
}



?>  

    <div class="contenedor">
  
      <div id="posicion">

        <h2><span class="fontawesome-lock"></span>Actualizar</h2>
         
        <form action="juegocatalogo.php" method="POST">

          <div class="fieldset">
            <p><label for="text">Nombre</label></p>                  
            <p><input type="text" id="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre?>"></p>

            <p><label for="text">Jornada</label></p>
            <select  id="text" name="Jornada" placeholder="Jornada" value="<?php echo $Jornada?>">
            <option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >-Jornada-</option>
    <?php 

 $i=0; 
$consul="SELECT * FROM jornada";
$result = $cone->query($consul);
    

foreach ($result as $row) 
    {
    $newid=$row['id'];
    $newname=$row['Nombre'];
    
        echo " <option value='".$newname."' > ". $newname ." </option>";
        $i++;

    }
  
  ?>
</select>

<p><label for="text">Local</label></p>
<select  id="text" name="Local" placeholder="Local" value="<?php echo $Local?>">
            <option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >-Equipos-</option>
    <?php 

 $i=0; 
$consul="SELECT * FROM equiposfut";
$result = $cone->query($consul);
    

foreach ($result as $row) 
    {
    $newid=$row['id'];
    $newname=$row['Equipo'];
    
        echo " <option value='".$newname."' > ". $newname ." </option>";
        $i++;

    }
  
  ?>
</select>

        
<p><label for="text">Visitante</label></p>
<select  id="text" name="Visitante" placeholder="Visitante" value="<?php echo $Visitante?>">
            <option value="" style="background-color:#036; font-weight:bold; color:#FFF; text-align:center;" >-Equipos-</option>
    <?php 

 $i=0; 
$consul="SELECT * FROM equiposfut";
$result = $cone->query($consul);
    

foreach ($result as $row) 
    {
    $newid=$row['id'];
    $newname=$row['Equipo'];
    
        echo " <option value='".$newname ."' > ". $newname ." </option>";
        $i++;

    }
  
  ?>
</select> 






            <input type="hidden" name="id<?php echo $s;?>" value="<?php echo  $id;?>">

<center><button value="1" name="env" class="button"><span>Actualizar</span></button></center>

          </div>

        </form>

      </div> <!-- end login -->

    </div>
  </body>	
</html>