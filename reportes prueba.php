<?php
include_once('config.php');
class  Tablas{
function __construct($Equipo, $Jugador, $Juego, $Minuto, $idjugador, $idequipo)
  {
  $this->id=$id;  
  $this->Equipo=$Equipo;
  $this->Jugador=$Jugador;
  $this->Juego=$Juego;
  $this->Minuto=$Minuto;
  $this->idjugador=$idjugador;
  $this->idequipo=$idequipo;
  }
public function usuarios(){
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


if ($this->Equipo!=="" || $this->Jugador!=="" || $this->Juego!=="" || $this->Minuto!=="" || $this->idjugador!=="" || $this->idequipo!==""){
$consulta = "SELECT * from goles where equipo='$this->Equipo' and  jugador='$this->Jugador' or juego='$this->Juego' or min='$this->Minuto' or id_jugador='$this->idjugador' or id_equipo='$this->idequipo' ";
}else{
 $consulta = "SELECT * FROM goles";
}
$resultado = $cone->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {
echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td>
<td><center>
<a href=golescatalogo.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualizagoles.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 />
</center></td>";
echo "</tr>";  
}
       
 $i++;
}
echo "</table>";
}
}
?>