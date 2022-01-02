<?php

/* 10 užduotis

Sugeneruokite objektą, kuris būtų sudarytas iš reikšmių, 
kurios yra pirmame 6 uždavinio objekte, 
bet nėra antrame 6 uždavinio objekte.

*/

$object1 = new stdClass;
$object2 = new stdClass;


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

echo '<br>Masyvai iš 200 elementų: <p>';
print_r($object1);
echo '<p>';
print_r($object2);
echo '<p>';

for($i = 0; $i < 200; $i++) {

	if ($object1->$i == $object2->$i) {
			
		unset($object1->$i);	
	
	}

}



echo '<br>Pirmas masyvas be reikšmių, atitinkančių antrojo masyvo reikmšes: <p>';
print_r($object1);



?>