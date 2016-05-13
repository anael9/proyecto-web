 * @author anael hernadez rivera
 * @version 1.0 
<?php

include_once('conectar.php');


class  Tablas{


function __construct($Nombre, $Jornada)
	{
	$this->Nombre=$Nombre;
	$this->Jornada=$Jornada;
	}


public function usuarios(){

$conexiondatos = new conexion();
$mysqli = $conexiondatos->conectarte();

if ($this->Nombre!=="" || $this->Jornada!==""){
 $consulta = "SELECT * FROM juego where Nombre='$this->Nombre' and jornada='$this->Jornada'";
}else{
 $consulta = "SELECT * FROM juego ";
}



$resultado = $mysqli->query($consulta);
$i=0;
    while ($fila = $resultado->fetch_row()) {

echo "<tr>";
echo "<td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td>".$fila[6]."</td>
<td><center>
<a href=equipocatalogo.php?id_us=".$fila[0]."><img src=http://ventadeactivos.com/img/ico2.png width=35 height=35 /></a><a href=actualizaequipo.php?borrar=".$fila[0]."><img src=http://www.unipamplona.edu.co/unipamplona/hermesoft/portalIG/PaginasAmarillas/publico/ayuda/paginas_amarillas/images/eliminar.gif width=35 height=35 /></a>
</center></td>";
echo "</tr>"; 
       
 $i++;
}
echo "</table>";

}


}


	

?>