<?php
session_start();
require_once "bda.php";
$db = conectaDB ();

if ($_REQUEST["usuario"] == " ") {
	$_SESSION['vacio'] = "1";
	header('Location:proyectoALTA.php');
} else {
	
$usuario = trim($_REQUEST["usuario"]);
$password = trim($_REQUEST["contraseña"]);
$nombre = trim($_REQUEST["nombre"]);
$apellidos = trim($_REQUEST["apellidos"]);

#$consulta = "SELECT COUNT(*) from usuarios where usuario = :usuario";
#$result = $db->prepare ( $consulta );
$result = $db->prepare("SELECT COUNT(*) from usuarios where usuario = :usuario");
$result->execute (array (
			":usuario" => $usuario ));
if (! $result) {
	print "<p>Error en la consulta.</p>\n";
} else {
	$encontrados = $result->fetchColumn ();
		if ($encontrados == 1) {
			$_SESSION["ERROR"] = "<img src=warningico.png /><p>El usuario ya existe</p>";
			header('Location:proyectoALTA.php');
		} else {
			$result =$db->prepare("INSERT INTO usuarios (usuario, password, nombre, apellidos) value (:usuario, :password, :nombre, :apellidos)");
			$filas = $result->execute (array (
					":usuario" => $usuario,
					":password" => $password,
					":nombre" => $nombre,
					":apellidos" => $apellidos
			));
			if ($filas == 0){
				$_SESSION["ERROR"] = "<img src=warningico.png /><p>El usuario ya existe</p>";
				header('Location:proyectoALTA.php');
			} else {
				$_SESSION["VALIDO"] = "<img src=1.png /><p>El usuario se ha agregado exitosamente.</p>";
				header('Location:proyectoALTA.php');
			}
			
		}
}}

// Proyecto
# Escrita por Eduardo Vallés
?>