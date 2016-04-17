<?php

class conexion
{
	public function conectar()
	{
		global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "acd");

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
}
}

?>

