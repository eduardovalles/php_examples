<?php session_start();session_destroy();?>

<html>
<head><title>Proyecto, BORRAr BASE DE DATOS</title>
<style>
body { text-align: center; }
body > * { text-align: center; }
form { display: inline-block; }
table { display: inline-block; }
</style></head>
<body><img src=users.png width=5% />
<h1>Administración de usuarios</h1>
<h2>Vaciar base de datos</h2>
<h3>Para efectuar el borrado escribe BORRAR</h3>

<form action="proyectoBTOTALphp.php">
<table>
<tr>
	<td><p>¿Borrar?</p></td>
	<td><input type="text" name="borrado" required/></td>
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