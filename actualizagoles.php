<?php
// CREANDO MI CONEXION
include_once('conectar.php');
class actualigoles
{
public $id;
public $Equipo;
public $Jugador;
public $Juego;
public $Minuto;
public $idjugador;
public $idequipo;
public $idjuego;


function __construct($id, $Equipo, $Jugador, $Juego, $Minuto, $idjugador, $idequipo, $idjuego)
	{
	$this->id=$id;	
	$this->Equipo=$Equipo;
	$this->Jugador=$Jugador;
	$this->Juego=$Juego;
	$this->Minuto=$Minuto;
	$this->idjugador=$idjugador;
	$this->idequipo=$idequipo;
	$this->idjuego=$idjuego;

	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		$consulta = "UPDATE from goles SET equipo='$this->Equipo', jugador='$this->Jugador', juego='$this->Juego', min='$this->Minuto', id_jugador='$this->idjugador', id_equipo='$this->idequipo' id_juego='$this->idjuego' where id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: goles.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
 
	echo $consulta = "INSERT into goles values('', '$this->Equipo', '$this->Jugador', '$this->Juego', '$this->Minuto', '$this->idjugador', '$this->idequipo', '$this->idjuego') ";
			if ($cone->query($consulta)){
				//header("Location: goles.php");
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
				header("Location: goles.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>