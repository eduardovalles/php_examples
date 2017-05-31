<?php session_start();

if (isset($_REQUEST["numero"])) {
$_SESSION['introducidos'][] = trim($_REQUEST["numero"]);

//if (isset($_REQUEST['numero'])) {
	if (trim($_REQUEST['numero']) == $_SESSION['adivinar']) {
		echo "<h1>Enhorabuena, as adivinado el número, \n</h1><h1>que era...</h1>";
		echo "<h2><p>(☞ﾟヮﾟ)☞     ". $_SESSION['adivinar'] ."     ☜(ﾟヮﾟ☜)</h2>\n";
		echo "<a href=practica_8_2.php>Volver a jugar</a>";
		$_SESSION['ganador'] = "ganador";
	} else {
	header('Location:practica_8_2.php');
	}
} else {
	echo "<p>Que tramposete, ¿eh?</p>";
	echo "<p>¡FUERA DE AQUí! (ง ͠° ͟ل͜ ͡°)ง </p>\n";
	echo "<a href=practica_8_2.php>Volver a donde toca</a>";
}

// print "<p>El nombre es $_SESSION[nombre]</p>";

// Práctica 7, apartado 2
# Escrita por Eduardo Vallés
?>

