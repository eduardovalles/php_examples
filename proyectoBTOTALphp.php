<?php
session_start();
require_once "bda.php";
$db = conectaDB ();

$borrado = trim($_REQUEST["borrado"]);


if ($borrado == "BORRAR") {
		$db->query("DELETE FROM usuarios");
		$_SESSION["VALIDO"] = "<img src=1.png /><p>Base de datos borrada</p>";
		header('Location:proyectoBTOTAL.php');
	} 
	else {
		$_SESSION["ERROR"] = "<img src=warningico.png /><p>Debe escribir BORRAR para borrar la base de datos</p>";
		header('Location:proyectoBTOTAL.php');
}
	


// Proyecto
# Escrita por Eduardo Vallés
?>