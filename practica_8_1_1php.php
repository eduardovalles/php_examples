<?php
session_start();

// print "<pre>"; print_r($_REQUEST); print "</pre>\n";
if (trim($_REQUEST["nombre"]) == "usuario") {
	if (trim($_REQUEST["contraseña"]) == "usuario") {
	print "<p>Bienvenido ". trim($_REQUEST["nombre"]) ."</p>\n";
	print "<p>Contraseña correcta</p>\n";
	echo "<a href=practica_8_1_2.php>Zona privada</a></br></br>";
	echo "<a href=practica_8_1_1.php>Cerrar sesión</a>";
	} else {
	print "<p>Contraseña incorrecta</p>\n";
	echo "<a href=practica_8_1_1.php>Salir</a>";
	}
} else {
	print "<p>No existe el usuario ". trim($_REQUEST["nombre"]) ."</p>\n";
	echo "<a href=practica_8_1_1.php>Salir</a>";
}

$_SESSION['nombre']  = trim($_REQUEST["nombre"]);
// print "<p>El nombre es $_SESSION[nombre]</p>";

// Práctica 8, apartado 1
# Escrita por Eduardo Vallés
?>