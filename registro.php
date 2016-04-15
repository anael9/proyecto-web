<?php
include('conectar.php');
	$usuario=$_POST['usuario'];
	$mail=$_POST['mail'];
	$pass= $_POST['contra'];
	$rpass=$_POST['recontra'];

if (isset($_POST['submit'])) {
	
	("SELECT * FROM login WHERE email='$mail'");
		if($pass==$rpass){

		$consulta = "INSERT into login values('', '$usuario', '$mail', '$pass') ";
			if ($mysqli->query($consulta)){
				header("Location: registro2.php");
											}
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>
