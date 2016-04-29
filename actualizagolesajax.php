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
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		$consulta = "UPDATE from goles SET equipo='$this->Equipo', jugador='$this->Jugador', juego='$this->Juego', min='$this->Minuto', id_jugador='$this->idjugador', id_equipo='$this->idequipo' where id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: golesajax.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
		$consulta = "INSERT into goles values('', '$this->Equipo', '$this->Jugador', '$this->Juego', '$this->Minuto', '$this->idjugador', '$this->idequipo') ";
			if ($cone->query($consulta)){
				header("Location: golesajax.php");
											}
			else{
				header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from goles where id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: golesajax.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>