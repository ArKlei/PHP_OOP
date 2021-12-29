<?php

/* 3 užduotis

Sugeneruokite objektą iš 30 elementų, kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15

*/

$objektas = new stdClass;

for ($i=0; $i<30; $i++) {
	
	$objektas->$i = rand(5,25);
	
} 

for ($i=0; $i<30; $i++) {
	
	if (($i == 0 || $i%2 == 0) && $objektas->$i > 15) {
		
		$objektas->$i = 0;
	
	}
} 


print_r($objektas);


?>