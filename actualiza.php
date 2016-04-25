<?php
// CREANDO MI CONEXION
include_once('conectar.php');
class actualizaposicion
{
public $id;
public $Equipo;
public $Jugados;
public $Ganados;
public $Empatados;
public $Perdidos;
public $gfavor;
public $gcontra;
public $Diferencia;
public $Puntos;

function __construct($Equipo, $Jugados, $Ganados, $Empatados, $Perdidos, $gfavor, $gcontra, $Diferencia, $Puntos)
	{
	$this->id=$id;	
	$this->Equipo=$Equipo;
	$this->Jugados=$Jugados;
	$this->Ganados=$Ganados;
	$this->Empatados=$Empatados;
	$this->Perdidos=$Perdidos;
	$this->Favor=$gfavor;
	$this->gcontra=$gcontra;
	$this->Diferencia=$Diferencia;
	$this->Puntos=$Puntos;
	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();


		$consulta = "UPDATE from posicionfut SET equipo='$this->Equipo', partidosjugados='$this->Jugados', partidosganado='$this->Ganados', partidosempato='$this->Empatados', partidosperdido='$this->Perdidos', golesfavor='$this->Favor', golescontra='$this->gcontra', diferencia='$this->Diferencia', puntos='$this->Puntos' where posicion_id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}
					
				}

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
		$consulta = "INSERT into posicionfut values('', '$this->Equipo', '$this->Jugados', '$this->Ganados', '$this->Empatados', '$this->Perdidos', '$this->Favor', '$this->gcontra', '$this->Diferencia', '$this->Puntos') ";
			if ($cone->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from posicionfut where posicion_id=$this->id ";
			if ($cone->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}


}

}
?>