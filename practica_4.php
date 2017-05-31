<html>
<head><title>Práctica 4</title></head>
<body>
<?php
// Inicio bloque PHP
// Ejercicio 1
$i=1;
while ($i <= 100){
	echo $i;

	if ($i != 100){
	echo ", ";
	}
	else {
		echo ".";
	}
	$i++;
};

echo "<br><br><br>";
// Ejercicio 2
$numeroamultiplicar=mt_rand(1,10);
$i=1;
while ($i <= 10){
	echo $numeroamultiplicar. " por " .$i. " = ";
	$result=$numeroamultiplicar*$i;
	echo $result. ".";
	echo "<br>";
	$i++;
	#o también $j+=1;
	
};

echo "<br><br><br>";
// Ejercicio 3
$j=100;
while ($j >= 0){
	echo $j;

	if ($j != 0){
		echo ", ";
	}
	else {
		echo ".";
	}
	$j-=2;
	#o también $j=$j-2;
};

echo "<br><br><br>";
// Ejercicio 4
$asterisco=null;
$k=1;
while ($k <= 10){
	$h=$k;
	while ($h <= $k){
		$asterisco .= "*";
		$h++;
	}
	echo $asterisco."<br />";
	$k++;
}

echo "<br><br><br>";
// Ejercicio 5
$numeroadividir=mt_rand(1,100);
$p=1;
echo "Los divisores de " .$numeroadividir. " son: ";
while($p <= $numeroadividir){
	if ($numeroadividir%$p == 0){
		echo $p;
		if ($p != $numeroadividir){
			echo ", ";
		}
		else {
			echo ".  ";
		}
	}
	$p++;
}
// Ejercicio 6
$numero=$numeroadividir;
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

echo "<br><br><br>";
// Ejercicio 7
$fibo=1;
$nacci=0;
for ($i=0; $i<=20; $i++){
	$suma=$fibo+$nacci;
	$fibo=$nacci;
	$nacci=$suma;
	echo $suma." ";
}

// Fin bloque PHP
?>
<p>Escrita por Eduardo Vallés</p>
</body>
</html>
