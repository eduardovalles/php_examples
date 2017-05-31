<html>
<head><title>Práctica 2</title></head>
<body>
<?php
// Inicio bloque PHP
$primera=4;
$segunda=8;
echo "<p>Esta es la primera práctica escrita en PHP.\n</p>";
echo "<p>La suma de $primera y $segunda es " .$primera. "+" .$segunda. "=" .($primera+$segunda) . "\n</p>";
echo "<p>El producto de $primera y $segunda es " .$primera. "*" .$segunda. "=" .($primera*$segunda) . "\n</p>";
echo "<p>La diferencia de $primera y $segunda es " .$primera. "-" .$segunda. "=" .($primera-$segunda) . "\n</p>";
echo "<p>La división de $primera y $segunda es " .$primera. "/" .$segunda. "=" .($primera/$segunda) . "\n</p>";
echo "<p>$primera elevada a $segunda es " .$primera. "^" .$segunda. "=" .(pow($primera,$segunda)) . "\n</p>";
echo "<p>Raíz cuadrada de $primera es " . "√" .$primera. "=" .(sqrt($primera)) . "\n</p>";
echo "<p>Raíz cuadrada de $segunda es " . "√" .$segunda. "=" .(sqrt($segunda)) . "\n</p>";

$cadena1="Hola a todo el mundo ";
$cadena2="mi nombre es Eduardo Vallés";

echo "<p>" . $cadena3 = $cadena1 . $cadena2;
echo "<p>" . $cadena1 .= $cadena2;

// Fin bloque PHP
?>
<p>Escrita por Eduardo Vallés</p>
</body>
</html>
