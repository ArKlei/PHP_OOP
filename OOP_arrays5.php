<?php

/* 5 užduotis

Naudodami funkciją unset() iš objekto ištrinkite visus elementus turinčius porinį indeksą;

*/

$objektas = new stdClass;


for ($i=0; $i<30; $i++) {
	
	$objektas->$i = rand(5,25);
	
		if ($i == 0 || $i%2 == 0) {
		
		unset($objektas->$i);
	
	}
	
} 

echo '<br>Iš masyvo: ';
print_r($objektas);


?>