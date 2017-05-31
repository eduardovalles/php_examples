<?php session_start();
if (isset($_SESSION['ganador'])){
	unset($_SESSION['ganador']);
	unset($_SESSION['numero']);
	unset($_SESSION['introducidos']);
	session_destroy();
}
?>

<html>
<head><title>Práctica 8, ejercicio 2</title>
<style>
body { text-align: center; }
body > * { text-align: center; }
form { display: inline-block; }
</style>
</head>

<body>
<form action="practica_8_2php.php">
<h1>¡Adivina el número!</h1>
<h2>¡De entre 1 y 10!</h2>
<h3>¡Y gana un fantástico <br/>NADA!</h3>
<p>( ͡° ͜ʖ ͡°)</p>
<p>Inserta un número: </p><input type="number" name="numero"  min="1" max="10"/>
<p><input type="submit" value="Enviar" /><input type="reset" value="Reiniciar" /></p>
</form>
<p> 
<?php
//$numero = $_REQUEST['numero'];
if (!isset($_SESSION['adivinar'])){
	$_SESSION['adivinar'] = mt_rand(1,10);
}
if (isset($_SESSION['introducidos'])) { 
	print "Intentos: ";
	for ($x=0;$x<count($_SESSION['introducidos']); $x++) {
	print $_SESSION['introducidos'][$x]." ";
	}
}
?>
</p>


<p style="text-align:center;">Escrita por Eduardo Vallés</p>
</body>
</html>