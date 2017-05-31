<?php
session_start();
require_once "bda.php";
$db = conectaDB ();

#if ($_REQUEST["usuario"] == " ") {
#	$_SESSION['vacio'] = "1";
#	header('Location:proyectoEDICION.php');
#} else {
	$_SESSION['cambio'] = 
	"<form action='proyectoALTAphp.php'>
	<table>
	<tr>
	<td><p>Usuario: </p></td>
	<td><input type='text' name='usuario' required/></td>
	</tr>
	<tr>
	<td><p>Contraseña: </p></td>
	<td><input type='password' name='contraseña' required/></td>
	</tr>
	<tr>
	<td><p>Nombre: </p></td>
	<td><input type='text' name='nombre' /></td>
	</tr>
	<tr>
	<td><p>Apellidos: </p></td>
	<td><input type='text' name='apellidos' /></td>
	</tr>
	<tr>
	<td><input type='submit' value='Enviar' /></td>
	<td><input type='reset' value='Reiniciar' /></td>
	</tr>
	</table>
	</form>";
	header('Location:proyectoEDICION.php');
#}

if (isset($_SESSION["cambio"])) {
	
	$cambio = trim($_SESSION["cambio"]);
	
	if (isset($_SESSION["usuario"])) {
	
	$usuario = trim($_REQUEST["usuario"]);
	$password = trim($_REQUEST["contraseña"]);
	$nombre = trim($_REQUEST["nombre"]);
	$apellidos = trim($_REQUEST["apellidos"]);

	#$consulta = "SELECT COUNT(*) from usuarios where usuario = :usuario";
	#$result = $db->prepare ( $consulta );
	$result = $db->prepare("SELECT COUNT(*) from usuarios where usuario = :cambio");
	$result->execute (array (
			":usuario" => $usuario ));
	if (! $result) {
		print "<p>Error en la consulta.</p>\n";
	} else {
		$encontrados = $result->fetchColumn ();
		if ($encontrados == 1) {
			$_SESSION["ERROR"] = "<img src=warningico.png /><p>El usuario ya existe</p>";
			header('Location:proyectoEDICION.php');
		} else {
			$result =$db->prepare("UPDATE usuarios SET usuario=:usuario, password=:password, nombre=:nombre, apellidos=:apellidos");
			$filas = $result->execute (array (
					":usuario" => $usuario,
					":password" => $password,
					":nombre" => $nombre,
					":apellidos" => $apellidos
			));
			if ($filas == 0){
				$_SESSION["ERROR"] = "<img src=warningico.png /><p>El usuario ya existe</p>";
				header('Location:proyectoEDICION.php');
			} else {
				$_SESSION["VALIDO"] = "<img src=1.png /><p>El usuario se ha agregado exitosamente.</p>";
				header('Location:proyectoEDICION.php');
			}
				
		}}
	}}

	// Proyecto
	# Escrita por Eduardo Vallés
	?>