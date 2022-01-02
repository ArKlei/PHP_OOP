<?php

/* 6 užduotis

Sugeneruokite objektą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.

*/

$objektas = new stdClass;
$countA=0;
$countB=0;
$countC=0;
$countD=0;

for ($i=0; $i<200; $i++) {
	
	$objektas->$i = rand(1,4);
	
		if ($objektas->$i == 1) {
		
			$objektas->$i = 'A';
			$countA++;
		
		} else if ($objektas->$i == 2) {
			
			$objektas->$i = 'B';
			$countB++;
			
		} else if ($objektas->$i == 3) {
			
			$objektas->$i = 'C';
			$countC++;
			
		} else {
			
			$objektas->$i = 'D';
			$countD++;
			
		}
	
	
	
} 

echo '<br>Masyvas iš 200 elementų: <p>';
print_r($objektas);
echo '<p>A raidžų viso: '.$countA.', B raidžių viso : '.$countB.', C raidžių viso: '.$countC.' ir D raidžių viso: '.$countD;


?>