<?php
// CREANDO MI CONEXION
include('conectar.php');


$Nombre=$_POST["Nombre"];
$Equipo=$_POST["Equipo"];
$Posicion=$_POST["Posicion"];


if(isset($_POST["id"])){
	$id=$_POST["id"];
		$consulta = "UPDATE jugadores SET Nombre='$Nombre', Equipo='$Equipo', posicion='$Posicion' where ID=$id ";
			if ($mysqli->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}
					}
elseif (isset($_POST["ids"])){
		$consulta = "INSERT into jugadores values('', '$Nombre', '$Equipo', '$Posicion') ";
			if ($mysqli->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}
}elseif (isset($_GET["borrar"])){
	$id=$_GET["borrar"];
	$consulta = "DELETE from jugadores where ID=$id ";
			if ($mysqli->query($consulta)){
				header("Location: jugadores.php");
											}
			else{
				header("Location: login.php");
				}
}else{  header("Location: jugadores.php"); }





?>