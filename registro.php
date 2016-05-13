
 * @author anael hernadez rivera
 * @version 1.0 <?php
include('conectar.php');
$conexiondatos = new conexion();
 $cone = $conexiondatos->conectarte();
	$usuario=$_POST['usuario'];
	$mail=$_POST['mail'];
	$pass= $_POST['contra'];
	$rpass=$_POST['recontra'];

if (isset($_POST['submit'])) {
	
	("SELECT * FROM login WHERE email='$mail'");
		if($pass==$rpass){

		$consulta = "INSERT into login values('', '$usuario', '$mail', '$pass') ";
			if ($cone->query($consulta)){
				header("Location: juego.php");
											}
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}
