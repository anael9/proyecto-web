<?php
include('conectar.php');
$consulta = "SELECT * FROM posicionfut";
$resultado = $mysqli->query($consulta);
?>
<select name="variable">
 <?php

 while($lista=mysqli_fetch_array($resultado))
   echo "<option  value='".$lista["equipo"]."'>".$lista["equipo"]."</option>"; 
  
 
?>

</select>