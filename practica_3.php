<html>
<head><title>Práctica 3</title></head>
<body>
<?php
// Inicio bloque PHP
echo "<p>Lotería La Primitiva:\n</p>";
echo mt_rand(1,49);
echo ", ";
echo mt_rand(1,49);
echo ", ";
echo mt_rand(1,49);
echo ", ";
echo mt_rand(1,49);
echo ", ";
echo mt_rand(1,49);
echo ", ";
echo mt_rand(1,49);
echo ".";

echo "<p>Lotería Euromillones:\n</p>";
echo mt_rand(1,50);
echo ", ";
echo mt_rand(1,50);
echo ", ";
echo mt_rand(1,50);
echo ", ";
echo mt_rand(1,50);
echo ", ";
echo mt_rand(1,50);
echo ". Números Estrella: ";
echo mt_rand(1,9);
echo " y ";
echo mt_rand(1,9);
echo ".";

echo "<br><br><br>";
		
$paroimpar=mt_rand(1,100);
echo "El número $paroimpar es ";
if ($paroimpar%2 == 0) {
	print "par.";
}
else {
	print "impar.";
}

echo "<br><br><br>";

$numero1=mt_rand(1,100);
$numero2=mt_rand(1,2);
$multiplicacion=$numero1*$numero2;
$suma=$numero1+$numero2;
echo "<p>El número $numero1 y $numero2 sumandos dan $suma y multiplicados $multiplicacion.\n<p>";
if ($suma > $multiplicacion){
	echo "$suma es más grande que $multiplicacion, el producto es menor.";
}
else {
	echo "$multiplicacion es más grande que $suma, el producto es mayor.";
}

echo "<br><br><br>";

$numero1=mt_rand(-10,10);
$numero2=mt_rand(-10,10);

echo "Números $numero1 y $numero2: ";
if ($numero1 > 0 && $numero2 < $numero1){
	print "Eduardo";
}
elseif ($numero1 > 0 && $numero2 >= $numero1){
	print "Vallés Mas";
}
elseif ($numero1 < 0){
	print "Eduardo Vallés Mas :)";
}
// Fin bloque PHP
?>
<p>Escrita por Eduardo Vallés</p>
</body>
</html>
