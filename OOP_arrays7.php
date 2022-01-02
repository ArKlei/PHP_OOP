<?php

/* 7 užduotis

Sugeneruokite objektą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.
Išrūšiuokite 6 uždavinio objektą pagal abecėlę.


*/

$object = new stdClass;
$object_sort=[];



for ($i=0; $i<200; $i++) {
	
	$object->$i = rand(1,4);
	
		if ($object->$i == 1) {
		
			$object->$i = 'A';

		} else if ($object->$i == 2) {
			
			$object->$i = 'B';
				
		} else if ($object->$i == 3) {
			
			$object->$i = 'C';
			
		} else {
			
			$object->$i = 'D';
			
		}
	
} 

for ($i=0; $i<200; $i++) {
	
	$object_sort[$i] = $object->$i;
	
}

sort($object_sort);


echo '<br>Masyvas iš 200 elementų: <p>';
print_r($object);
echo '<p>Išrūšiuotas masyvas: <p>';
print_r($object_sort);



?>