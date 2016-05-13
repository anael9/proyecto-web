 * @author anael hernadez rivera
 * @version 1.0 
<?php
// CREANDO MI CONEXION
include_once('conectar.php');



class actualiequipo
{
public $id;
public $Nombre;
public $Jornada;
public $Local;
public $Glocal;
public $Visitante;
public $Gvisitante;



function __construct($id, $Nombre, $Jornada, $Local, $Glocal, $Visitante, $Gvisitante)
	{
	$this->id=$id;	
	$this->Nombre=$Nombre;
	$this->Jornada=$Jornada;
	$this->Local=$Local;
	$this->Glocal=$Glocal;
	$this->Visitante=$Visitante;
	$this->Gvisitante=$Gvisitante;
	}
public function actualiza()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();

        
		echo $consulta = "UPDATE juego SET Nombre='$this->Nombre', jornada='$this->Jornada', local='$this->Local', goleslocal='$goles', visitante='$this->Visitante', golesvisitante='$this->Gvisitante' where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: juego.php");
											}
			else{
				header("Location: login.php");
				}
					}
				

public function guardar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
 
	echo $consulta = "INSERT into juego values('', '$this->Equipo', '$this->Jugador', '$this->Local', '$this->Glocal', '$this->Visitante', '$this->Gvisitante') ";
			if ($cone->query($consulta)){
				header("Location: juego.php");
											}
			else{
				header("Location: login.php");
				}

			}

public function eliminar()
	{

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$consulta = "DELETE from juego where id=$this->id";
			if ($cone->query($consulta)){
				header("Location: juego.php");
											}
			else{
				header("Location: login.php");
				}

}
}

?>