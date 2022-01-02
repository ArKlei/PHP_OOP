<?php

/* 8 užduotis

Sugeneruokite 3 objektus pagal 6 uždavinio sąlygą. 
Sudėkite objektus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.



*/

$object1 = new stdClass;
$object2 = new stdClass;
$object3 = new stdClass;
$object_sum = new stdClass;




for ($i=0; $i<200; $i++) {
	
	$object1->$i = rand(1,4);
	
		if ($object1->$i == 1) {
		
			$object1->$i = 'A';

		} else if ($object1->$i == 2) {
			
			$object1->$i = 'B';
				
		} else if ($object1->$i == 3) {
			
			$object1->$i = 'C';
			
		} else {
			
			$object1->$i = 'D';
			
		}
	
} 

for ($i=0; $i<200; $i++) {
	
	$object2->$i = rand(1,4);
	
		if ($object2->$i == 1) {
		
			$object2->$i = 'A';

		} else if ($object2->$i == 2) {
			
			$object2->$i = 'B';
				
		} else if ($object2->$i == 3) {
			
			$object2->$i = 'C';
			
		} else {
			
			$object2->$i = 'D';
			
		}
	
} 
for ($i=0; $i<200; $i++) {
	
	$object3->$i = rand(1,4);
	
		if ($object3->$i == 1) {
		
			$object3->$i = 'A';

		} else if ($object3->$i == 2) {
			
			$object3->$i = 'B';
				
		} else if ($object3->$i == 3) {
			
			$object3->$i = 'C';
			
		} else {
			
			$object3->$i = 'D';
			
		}
	
} 

for ($i=0; $i<200; $i++) {
	
	$object_sum->$i = $object1->$i . $object2->$i . $object3->$i;
	
}


echo '<br>Masyvai iš 200 elementų: <p>';
print_r($object1);
echo '<p>';
print_r($object2);
echo '<p>';
print_r($object3);
echo '<p>';
print_r($object_sum);



?>