<?php
session_start();

// Pedro, estos son enlaces a mis otros ejercicios, pero como no los 
// tendrás todos en la misma carpeta, pues no funcionarán :(, pero vamos,
// que el código está bien :)

if (trim($_SESSION['nombre']) == "usuario") {
	print "<p>". trim($_SESSION['nombre']) ." aquí tienes tus enlaces:</p>\n";
	echo "<a href=practica_2.php>Práctica 2</a></br></br>";
	echo "<a href=practica_3.php>Práctica 3</a></br></br>";
	echo "<a href=practica_4.php>Práctica 4</a></br></br>";
	echo "<a href=practica_5.php>Práctica 5</a></br></br>";
	echo "<a href=practica_6.php>Práctica 6</a></br></br></br></br>";
	echo "<a href=practica_8_1_1.php>Cerrar sesión</a>";
} else {
	print "<img width=20% src='warning.png'>";
	print "<p>Introduzca su usuario y contraseña primero</p>\n";
	echo "<a href=practica_8_1_1.php>Salir</a>";
}


// Práctica 8, apartado 1
# Escrita por Eduardo Vallés
?>