<?php

/* 1 užduotis

Sukurkite Klasę kuri turi tris savybes. company, address, employee_count. 
Klasė turi turėti konstruktorių ir galimybę priimti tris argumentus. 
Taip pat klasės viduje aprašykite metodą kuris tikrintų darbuotojų skaičių gaunamą 
iš employee_count savybės ir grąžintų teigiamą arba neigiamą atsakymą sąlygai 
“Ar darbuotojų skaičius yra didesnis nei 3”. 
Jeigu taip atspausdinkite įmonės duomenis.
Darbuotojų skaičių objekto iniciavime priskirtikite atsitiktinį. Nuo 1 iki 100.

 */

class Companies {
	
	public $name;
	public $address;
	public $employee_count; 
	
	const TEXT = '<h5>Grupės tinklapio adresas:</h5>';
	public static $sba_www =  '<a href="https://sba.lt/lt">https://sba.lt/lt</a>';
	
	public function __construct($name,$address,$employee_count) {
		$this->name = $name;
		$this->address = $address;
		$this->employee_count = $employee_count;		
	}
	
	public function data() {
	
		if ($this->employee_count > 3) {
			return '<h1>Įmonė '.$this->name.' yra adresu: '.$this->address.', turi viso '.$this->employee_count.' darbuotojų</h1>';
		}
	}
	
	public static function sba_text() {
		
		return self::TEXT;
		
	}
	
	public static function sba_www() {
		
		return self::$sba_www; // ne konstanta, tad su $
		
	}
}

$sba = new Companies('SBA Home','Joniškės g.21, Klaipėda',rand(1,100));
echo 'Dalis iš parent klasės Companies'.$sba -> data();

?>
