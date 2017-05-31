<?php session_start();session_destroy();?>

<html>
<head><title>Proyecto, BORRADO</title>
<style>
body { text-align: center; }
body > * { text-align: center; }
form { display: inline-block; }
table { display: inline-block; }
</style></head>
<body><img src=users.png width=5% />
<h1>Administración de usuarios</h1>
<h2>Borrado de un usuario</h2>

<form action="proyectoBORRADOphp.php">
<table>
<tr>
	<td><p>Usuario: </p></td>
	<td><input type="text" name="usuario" required/></td>
</tr>
<tr>
	<td><input type="submit" value="Enviar" /></td>
	<td><input type="reset" value="Reiniciar" /></td>
</tr>
</table>
</form>
<?php
	if (isset($_SESSION['VALIDO'])) {
		print $_SESSION["VALIDO"];
	} 
	if (isset($_SESSION['ERROR'])) {
		print $_SESSION["ERROR"];
	}
?>

<br><a href='proyecto1.php'>Volver al menú</a> 

<p style="text-align:center;">Escrita por Eduardo Vallés</p>
</body>
</html>