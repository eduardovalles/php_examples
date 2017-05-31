<?php
session_start();
require_once "bda.php";
$db = conectaDB ();

	$usuario = trim($_REQUEST["usuario"]);

	$result = $db->prepare("SELECT COUNT(*) from usuarios where usuario = :usuario");
	$result->execute (array (
			":usuario" => $usuario ));
	if (! $result) {
		print "<p>Error en la consulta.</p>\n";
	} else {
		$encontrados = $result->fetchColumn ();
		if ($encontrados == 1) {
			$result =$db->prepare("DELETE FROM usuarios WHERE usuario = :usuario");
			$filas = $result->execute (array (
					":usuario" => $usuario ));
			$_SESSION["VALIDO"] = "<img src=1.png /><p>El usuario se ha borrado exitosamente.</p>";
			header('Location:proyectoBORRADO.php');
		} else {
			if (isset($filas) == 0){
				$_SESSION["ERROR"] = "<img src=warningico.png /><p>El usuario no existe</p>";
				header('Location:proyectoBORRADO.php');
			}
				
		}
	}


// Proyecto
# Escrita por Eduardo Vallés
?>