<?php
include_once('conectar.php');
class login
{
	public $nombre;
	public $contra;


	function __construct($nombre, $contra)
	{
		$this->nombre = $nombre;
		$this->contra = $contra;

	}
	
       

	public function consulta(){

		$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();

$consulta = "SELECT * FROM login where usuario='$this->nombre' and Contrasena='$this->contra'";
$resultado = $cone->query($consulta);
$fila = $resultado->fetch_row();

	


if ($fila[2]){
	$valido=1;
	$nombre=$fila[2];
	session_start();
	$_SESSION["usuario"]=$nombre;
	header("Location: catalogofutbol.php?valido=$valido");
}
	else{
$valido=0;
header("Location: login.php?valido=$valido");
}
}	
}

?>