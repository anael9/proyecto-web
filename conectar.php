 * @author anael hernadez rivera
 * @version 1.0 
<?php
class conexion
{
	public function conectarte()
	{
		global $mysqli;
$mysqli = new mysqli("localhost", "root", "", "acd");

if ($mysqli->connect_errno) {
	die('Connect Error: ' . $mysqli->connect_errno);
    
}
return $mysqli;
}
}

?>

