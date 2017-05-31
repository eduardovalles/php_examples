<html>
<head><title>Práctica 5</title></head>
<body>
<?php
// Inicio bloque PHP
// Ejercicio 1
$nota=array("suspenso", "aprobado", "bien", "notable", "sobresaliente");
echo "<p>Si la nota es menor que 5 → $nota[0]\n</p>";
echo "<p>Si la nota está entre 5 y 6 → $nota[1]\n</p>";
echo "<p>Si la nota está entre 6 y 7 → $nota[2]\n</p>";
echo "<p>Si la nota está entre 7 y 8 → $nota[3]\n</p>";
echo "<p>Si la nota es mayor que 8 → $nota[4]</p>";

echo "<br><br><br>";
// Ejercicio 2
$numeros=array(mt_rand(1,49), mt_rand(1,49), mt_rand(1,49), mt_rand(1,49), mt_rand(1,49), mt_rand(1,49));

#Imprimir la matriz con la función print_r();
print_r($numeros); echo "<p>\n</p>";

#Imprimir los elementos de la matriz utilizando un bucle for.
$longitud=count($numeros);
for($i=0; $i<$longitud; $i++)
{
	echo $numeros[$i];
	echo " ";
} echo "<p>\n</p>";

#Ordenar la matriz de menor a mayor y volver a imprimirla.
$ordenados=$numeros;
sort($ordenados);
print_r($ordenados); echo "<p>\n</p>";

#Mostrar el número más bajo de la apuesta.
echo "<p>El número más bajo es: ".min($ordenados)."\n</p>";

#Visualizar el número más alto de la apuesta.
echo "<p>El número más alto es: ".max($ordenados)."\n</p>";

echo "<br><br><br>";
// Ejercicio 3
for($p=0; $p<=100; $p+=5){
	echo $p;
	if ($p != 100){
		echo ", ";
	}
	else {
		echo ".";
	}
}

echo "<br><br><br>";
// Ejercicio 4
#$dado=array('1.svg', '2.png', '3.jpg', '4.gif', '5.bmp', '6.tif');
$dado=array('1', '2', '3', '4', '5', '6');
$result=$dado[rand(0,5)];
echo "<img width=5% src=".$result.".svg\n>";
$result2=array('cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis');
echo " ¡Enhorabuena, has sacado un ".$result2[$result]."!";

echo "<br><br><br>";
// Ejercicio 5
$images=array("serpiente.svg", "ballena.svg", "caballito_mar.svg", "camello.svg",
		"cebra.svg", "elefante.svg", "hipopotamo.svg", "jirafa.svg", "leon.svg", 
		"leopardo.svg", "medusa.svg", "mono.svg", "oso.svg", "oso_blanco.svg", "pajaro.svg", 
		"pinguino.svg", "rinoceronte.svg", "tigre.svg", "tortuga_marina.svg", "tortuga.svg");
$images_aleatoria=rand(0, count($images) - 1);

echo "<img src=$images[$images_aleatoria]>";
				
echo "<br><br><br>";
// Ejercicio 6
$nombre=array("Serpiente", "Ballena", "Caballito de mar", "Camello",
		"Cebra", "Elefante", "Hipopotamo", "Jirafa", "León",
		"Leopardo", "Medusa", "Mono", "Oso", "Oso blanco", "Pájaro",
		"Pingüino",	"Rinoceronte", "Tigre", "Tortuga marina", "Tortuga");

echo "<h1>$nombre[$images_aleatoria]</h1>";

// Fin bloque PHP
?>
<p>Escrita por Eduardo Vallés</p>
</body>
</html>
