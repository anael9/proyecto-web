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


		echo $consulta = "UPDATE equiposfut SET Equipo='$this->Equipo', capitan='$this->Jugador' where id=$this->id";
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
 
	echo $consulta = "INSERT into equiposfut values('', '$this->Equipo', '$this->Jugador') ";
			if ($cone->query($consulta)){
				header("Location: equipo.php");
											}
			else{
				header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from equiposfut where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: equipo.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>