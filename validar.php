<?php
class login
{
	public $nombre;
	public $contra;


	function __construct($nombre, $contra)
	{
		$this -> nombre = $nombre;
		$this  -> contraseña = $contra;

	}
	public function conectar(){
       include('conectar.php');
	}

	public function consulta(){
$nombre=$_POST["usuario"];
$contra=$_POST["contra"];
$consulta = "SELECT * FROM login where usuario='nombre' and contrasena='contraseña'";
$resultado = $mysqli->query($consulta);
$fila = $resultado->fetch_row();
	}

	public function iniciarsecion(){
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


$login=new login($nombre, $contra);
$login ->conectar();
$login ->consulta();
$login ->iniciarsecion();




?>