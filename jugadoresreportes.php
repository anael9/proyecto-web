 * @author anael hernadez rivera
 * @version 1.0 
<?php

include_once('conectar.php');


class  Tablas{


function __construct($Equipo, $Jugador)
	{
	$this->Equipo=$Equipo;
	$this->Jugador=$Jugador;
	}


public function usuarios(){

$conexiondatos = new conexion();
$mysqli = $conexiondatos->conectarte();

if ($this->Equipo!=="" || $this->Jugador!==""){
 $consulta = "SELECT * FROM jugadores where jugador='$this->Equipo' and equipo='$this->Jugador'";
}else{
 $consulta = "SELECT * FROM jugadores";
}



$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {

echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td>
<td><center>
<a href=jugadorescatalogo.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=jugadoresactualiza.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 /></a>
</center></td>";
echo "</tr>"; 
       
 $i++;
}
echo "</table>";

}


}




?>