<html>
<head><meta charset="UTF-8"><title>Práctica 5</title></head>
<body>
<?php
// Inicio bloque PHP
// Ejercicio 1
function numerosprimos($numero){
	# $numero=mt_rand(1,100); *Aquí
	$s=0;
	for($i=1;$i<=$numero;$i++){
		if($numero%$i==0){
			$s=$s+1;
		}
	}
	if($s==2){
		echo "El número " .$numero. " si es primo";
	}
	else{
		echo "El número " .$numero. " no es primo";
	}
}

# echo numerosprimos(); Si dejamos vacío el valor, deveremos poner el rand dentro de la función*.
echo numerosprimos(mt_rand(1,100));

echo "<br><br><br>";
// Ejercicio 2
function media(){
	echo "Los números ";
	$i=0; 
	while($i<=10){
		echo $numarray[]=mt_rand(1,10);
		if ($i != 10){
			echo ", ";
		}
		else {
			echo " hacen la siguiente media: ";
		}
		$i++;
	}
	$suma=array_sum($numarray);
	$total=count($numarray);
	$media=$suma / $total;
	echo $media;
}
echo media();

echo "<br><br><br>";
// Ejercicio 3
#Uso manual:
function contarvocales($cadenadetexto, $vocal){
	echo "El texto (sin acentos): '" .$cadenadetexto. "' tiene un total de " .substr_count($cadenadetexto, $vocal). " '$vocal's.";
}
echo contarvocales("Esto es una cadena de texto", "a");
echo "<br>";
#Uso automático:
function contarvocales2($cadenadetexto){
	$resultado = 0;
	$resultado += substr_count($cadenadetexto, "a");
	$resultado += substr_count($cadenadetexto, "e");
	$resultado += substr_count($cadenadetexto, "i");
	$resultado += substr_count($cadenadetexto, "o");
	$resultado += substr_count($cadenadetexto, "u");
	$resultado += substr_count($cadenadetexto, "A");
	$resultado += substr_count($cadenadetexto, "E");
	$resultado += substr_count($cadenadetexto, "I");
	$resultado += substr_count($cadenadetexto, "O");
	$resultado += substr_count($cadenadetexto, "U");
	echo "El texto (sin acentos): '" .$cadenadetexto. "' tiene un total de " .$resultado. " vocales.";
}
echo contarvocales2("Esto es una cadena de texto");

echo "<br><br><br>";
// Ejercicio 4
function cuadrado($caracter, $tamaño){
	for ($i=0;$i<$tamaño;$i++){
		for ($j=0;$j<$tamaño;$j++){
			echo $caracter. " ";
		}
		echo "<br>";
	}
}
echo cuadrado("#", 10);

echo "<br><br><br>";
// Ejercicio 5
function piramide($caracter, $tamaño){
	while ($tamaño >= 0){	
		$h=$tamaño;
		while ($h > 0){
			echo $caracter;
			$h--;
		}
		echo "<br>";
		$tamaño--;
	}
}
echo piramide("#", 10);

echo "<br><br><br>";
// Ejercicio 6
function tiempo($ayer, $hoy){
	if ($ayer == "Sol"){
		if ($hoy == "Sol"){
			$mañana = "Sol";
		}
		elseif ($hoy == "Nublado"){
			$mañana = "Nublado";
		}
		elseif ($hoy == "Lluvia"){
			$mañana = "Nublado";
		}
	}
	elseif ($ayer == "Nublado"){
		if ($hoy == "Sol"){
			$mañana = "Sol";
		}
		elseif ($hoy == "Nublado"){
			$mañana = "Nublado";
		}
		elseif ($hoy == "Lluvia"){
			$mañana = "Nublado";
		}
	}
	elseif ($ayer == "Lluvia"){
		if ($hoy == "Sol"){
			$mañana = "Nublado";
		}
		elseif ($hoy == "Nublado"){
			$mañana = "Nublado";
		}
		elseif ($hoy == "Lluvia"){
			$mañana = "Lluvia";
		}
	}
	echo "Si ayer hizo " .$ayer. " y hoy " .$hoy. ", mañana hará " .$mañana. ".";
}
$tiempo=array("Sol", "Lluvia", "Nublado");
	$ayer=$tiempo[rand(0,2)];
	$hoy=$tiempo[rand(0,2)];
echo tiempo($ayer, $hoy);

// Fin bloque PHP
?>
<p>Escrita por Eduardo Vallés</p>
</body>
</html>
