<?php

/* 4 užduotis

Sukurkite klasę kuri priimtų du argumentus: min ir max. 
Klasėje aprašykite konstruktorių ir du metodus. 
Pastarieji turi tikrinti ar minimali reikšmė yra didesnė nei 5 
ir ar argumento max reikšmė mažesnė nei 56 ir grazinti teigiamą 
arba neigiamą rezultatą. 
Jei paduodamos reikšmės į trečią metodą atitinka abieju metodų kondiciją (if) , 
tuomet grąžinkite reikšmę į objektą. 
Min argumentas sukuriamas pasinaudojant funkcija rand(0, 56), 
o Max argumentas funkcija rand(5, 156).


 */

class Math {
	public $min;
	public $max;
									
	public function __construct($min,$max) {
		$this->min = $min;
		$this->max = $max;	
	}
	
	public function checkMin() {
		
		if($this->min > 5) {

			return $this->min;
			
		}
		
	}
	
	public function checkMax() {
				
		if($this->max < 56) {
		
			return $this->max; 
						
		} 
				
	}

}

$numbers = new Math(rand(0,56),rand(5,156));
echo 'Min paduotas yra: ';
echo $numbers -> checkMin();
echo ', o max paduotas yra: '; 
echo $numbers -> checkMax();
echo '<br>';
	
?>
