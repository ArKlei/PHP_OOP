<?php

/* 2 užduotis

Sugeneruokite objektą iš 30 elementų, kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
Papildykite objektą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras objektas padidėtų iki indekso 39

*/

$objektas = new stdClass;

for ($i=0; $i<30; $i++) {
	
	$objektas->$i = rand(5,25);
	
} 

for ($i=30; $i<40; $i++) {
	
	$objektas->$i = rand(5,25);
	
} 

print_r($objektas);

?>