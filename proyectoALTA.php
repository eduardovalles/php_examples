<?php session_start();session_destroy();?>

<html>
<head><title>Proyecto, ALTA</title>
<style>
body { text-align: center; }
body > * { text-align: center; }
form { display: inline-block; }
table { display: inline-block; }
</style></head>
<body><img src=users.png width=5% />
<h1>Administración de usuarios</h1>
<h2>Alta de un usuario</h2>

<form action="proyectoALTAphp.php">
<table>
<tr>
	<td><p>Usuario: </p></td>
	<td><input type="text" name="usuario" required/></td>
</tr>
<tr>
	<td><p>Contraseña: </p></td>
	<td><input type="password" name="contraseña" required/></td>
</tr>
<tr>
	<td><p>Nombre: </p></td>
	<td><input type="text" name="nombre" /></td>
</tr>
<tr>
	<td><p>Apellidos: </p></td>
	<td><input type="text" name="apellidos" /></td>
</tr>
<tr>
	<td><input type="submit" value="Enviar" /></td>
	<td><input type="reset" value="Reiniciar" /></td>
</tr>
</table>
</form>
<?php
#if (isset($_SESSION['ERROR'])) { 
	#print "<img src=warningico.png /><p>No puede dejar el nombre en blanco, o dejar solo espacios.</p>";
	if (isset($_SESSION['VALIDO'])) {
		print $_SESSION["VALIDO"];
	} 
	if (isset($_SESSION['ERROR'])) {
		print $_SESSION["ERROR"];
	}
#}
?>

<br><a href='proyecto1.php'>Volver al menú</a> 

<p style="text-align:center;">Escrita por Eduardo Vallés</p>
</body>
</html>