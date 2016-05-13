 * @author anael hernadez rivera
 * @version 1.0 
<?php
// CREANDO MI CONEXION
include_once('conectar.php');
class actualiequipo
{
public $id;
public $Nombre;




function __construct($id, $Nombre)
	{
	$this->id=$id;	
	$this->Nombre=$Nombre;

	
	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		echo $consulta = "UPDATE jornada SET Nombre='$this->Nombre' where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: jornada.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{
		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
 
	echo $consulta = "INSERT into jornada values('', '$this->Nombre') ";
			if ($cone->query($consulta)){
				header("Location: jornada.php");
											}
			else{
				header("Location: login.php");
				}
			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	echo $consulta = "DELETE from jornada where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: jornada.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>	