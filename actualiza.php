<?php
// CREANDO MI CONEXION
include('conectar.php');


$Equipo=$_POST["Equipo"];
$Jugados=$_POST["Jugados"];
$Ganados=$_POST["Ganados"];
$Empatados=$_POST["Empatados"];
$Perdidos=$_POST["Perdidos"];
$gfavor=$_POST["Favor"];
$gcontra=$_POST["contra"];
$Diferencia=$_POST["Diferencia"];
$Puntos=$_POST["Puntos"];


if(isset($_POST["id"])){
	$id=$_POST["id"];
		$consulta = "UPDATE posicionfut SET equipo='$Equipo', partidosjugados='$Jugados', partidosganado='$Ganados', partidosempato='$Empatados', partidosperdido='$Perdidos', golesfavor='$gfavor', golescontra='$gcontra', diferencia='$Diferencia', puntos='$Puntos' where posicion_id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}
					}
elseif (isset($_POST["ids"])){
	//$id=$_POST["id"];
		$consulta = "INSERT into posicionfut values('', '$Equipo', '$Jugados', '$Ganados', '$Empatados', '$Perdidos', '$gfavor', '$gcontra', '$Diferencia', '$Puntos') ";
			if ($mysqli->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}
}elseif (isset($_GET["borrar"])){
	$id=$_GET["borrar"];
	$consulta = "DELETE from posicionfut where posicion_id=$id ";
			if ($mysqli->query($consulta)){
				header("Location: catalogofutbol.php");
											}
			else{
				header("Location: login.php");
				}
}else{  header("Location: catalogofutbol.php"); }





?>