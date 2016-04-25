<?php
// CREANDO MI CONEXION
include_once('config.php');
$nombre = mysql_real_escape_string($_POST['usuario']);
$contra = mysql_real_escape_string($_POST['contra']);
include_once('validar.php');

$conexion=new login($nombre,$contra);
$conexion->consulta(); 
?>