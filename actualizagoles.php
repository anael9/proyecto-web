
 * @author anael hernadez rivera
 * @version 1.0 <?php
// CREANDO MI CONEXION
include_once('conectar.php');
class actualigoles
{
public $id;
public $Equipo;
public $Jugador;
public $Juego;
public $Minuto;



function __construct($id, $Equipo, $Jugador, $Juego, $Minuto)
	{
	$this->id=$id;	
	$this->Equipo=$Equipo;
	$this->Jugador=$Jugador;
	$this->Juego=$Juego;
	$this->Minuto=$Minuto;
	

	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		$consulta = "UPDATE goles SET equipo='$this->Equipo', jugador='$this->Jugador', juego='$this->Juego', min='$this->Minuto' where id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: equipo.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
 
	echo $consulta = "INSERT into goles values('', '$this->Equipo', '$this->Jugador', '$this->Juego', '$this->Minuto') ";
			if ($cone->query($consulta)){
				//header("Location: equipo.php");
											}
			else{
				//header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from goles where id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: equipo.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>