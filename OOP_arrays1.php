<?php

/* 1 užduotis

Sugeneruokite objektą iš 30 elementų, kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

*/

$objektas = new stdClass;

for ($i=0; $i<30; $i++) {
	
	$objektas->$i = rand(5,25);
	
} 

print_r($objektas);

?>