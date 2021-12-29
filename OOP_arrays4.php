<?php

/* 4 užduotis

Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

*/

$objektas = new stdClass;


for ($i=0; $i<30; $i++) {
	
	$objektas->$i = rand(5,25);
	
	if ($objektas->$i > 10) {
		echo 'Pirmasis mažiausias indeksas, kurio reikšmė didesnė už nulį, yra Nr.: ';
		echo $i;
		break;
	}
	
} 

echo '<br>Iš masyvo: ';
print_r($objektas);


?>