 * @author anael hernadez rivera
 * @version 1.0 
<?php
// CREANDO MI CONEXION
include_once('conectar.php');
class actualiequipo
{
public $id;
public $Equipo;
public $Jugador;



function __construct($id, $Equipo, $Jugador)
	{
	$this->id=$id;	
	$this->Equipo=$Equipo;
	$this->Jugador=$Jugador;
	
	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		echo $consulta = "UPDATE jugadores SET jugador='$this->Jugador', equipo='$this->Equipo' where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
 
	echo $consulta = "INSERT into jugadores values('', '$this->Jugador', '$this->Equipo') ";
			if ($cone->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from jugadores where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>