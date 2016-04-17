<?php
// CREANDO MI CONEXION
include('conectar.php');


$Equipo=$_POST["Equipo"];
$Capitan=$_POST["Capitan"];


if(isset($_POST["id"])){
	$id=$_POST["id"];
		$consulta = "UPDATE equiposfut SET equipo='$Equipo', capitan='$Capitan' where id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: equiposfut.php");
											}
			else{
				header("Location: login.php");
				}
					}
elseif (isset($_POST["ids"])){
		$consulta = "INSERT into equiposfut values('', '$Equipo', '$Capitan')";
			if ($mysqli->query($consulta)){
				header("Location: equiposfut.php");
											}
			else{
				header("Location: login.php");
				}
}elseif (isset($_GET["borrar"])){
	$id=$_GET["borrar"];
	$consulta = "DELETE from equiposfut where id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: equiposfut.php");
											}
			else{
				header("Location: login.php");
				}
}else{  header("Location: equiposfut.php"); }





?>