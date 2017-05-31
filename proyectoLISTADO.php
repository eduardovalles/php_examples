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
<h2>Lista de usuarios</h2>

<table border="1">
<tr>
	<td><b><p>Usuario</p></b></td>
	<td><b><p>Contraseña</p></b></td>
	<td><b><p>Nombre</p></b></td>
	<td><b><p>Apellidos</p></b></td>
</tr>
<?php
require_once "bda.php";
$db = conectaDB ();

$result = $db->query('SELECT * FROM usuarios');
while($fila = $result->fetch()) {
	print "<tr>";
 echo "<td>" . $fila[0] . "</td>";
 echo "<td>" . $fila[1] . "</td>";
 echo "<td>" . $fila[2] . "</td>";
 echo "<td>" . $fila[3] . "</td>";
 	print "</tr>";
} ?>
</table>

<br><br><a href='proyecto1.php'>Volver al menú</a> 

<p style="text-align:center;">Escrita por Eduardo Vallés</p>
</body>
</html>