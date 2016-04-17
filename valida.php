<?php
// CREANDO MI CONEXION
include('config.php');
$nombre = mysql_real_escape_string($_POST['usuario']);
$contra = mysql_real_escape_string($_POST['contra']);
include('validar.php');

$conexion=new login($nombre,$contra);
$conexion->consulta(); 
?>