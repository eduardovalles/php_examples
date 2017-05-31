<?php

// print "<pre>"; print_r($_REQUEST); print "</pre>\n";
if (trim($_REQUEST["nombre"]) == "") {
	print "<p>No ha escrito ningún nombre</p>\n";
} else {
	print "<p>Su nombre es ". trim($_REQUEST["nombre"]) . "</p>\n";
}
if (trim($_REQUEST["email"]) == "") {
	print "<p>No ha escrito ningún correo electrónico</p>\n";
} else {
	print "<p>Su correo electrónico es ". trim($_REQUEST["email"]) . "</p>\n";
}

echo "<a href=practica_7_2.php>Volver al ejercicio 7, apartado 2</a>";

// Práctica 7, apartado 2
# Escrita por Eduardo Vallés
?>