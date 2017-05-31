<?php session_start();session_destroy();?>

<html>
<head><title>Práctica 8, página 1</title>
<style>
body { text-align: center; }
body > * { text-align: center; }
form { display: inline-block; }
</style>
</head>

<body>
<form action="practica_8_1_1php.php">
<p>Nombre: </p><input type="text" name="nombre" />
<p>Contraseña: </p><input type="password" name="contraseña" />
<p><input type="submit" value="Enviar" /></p>
<p><input type="reset" value="Reiniciar" /></p>
</form>

<p style="text-align:center;">Escrita por Eduardo Vallés</p>
</body>
</html>