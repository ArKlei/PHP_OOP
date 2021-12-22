<?php

/* 3 užduotis

Sukurkite Klasę kuri turi tris savybes. company, address, employee_count. 
Klasė turi turėti konstruktorių ir galimybę priimti tris argumentus. 
Taip pat klasės viduje aprašykite metodą kuris tikrintų darbuotojų skaičių gaunamą 
iš employee_count savybės ir grąžintų teigiamą arba neigiamą atsakymą sąlygai 
“Ar darbuotojų skaičius yra didesnis nei 3”. 
Jeigu taip atspausdinkite įmonės duomenis.
Darbuotojų skaičių objekto iniciavime priskirtikite atsitiktinį. Nuo 1 iki 100.

Atsidarykite ir apdorokite duotą JSON failą. Iš jo gautą masyvą paleiskite cikle ir 
kiekvieno ciklo eigoje sukurkite objektą pagal pirmoje užduotyje aprašytą klasę. 
Atspausdinkite įmonės duomenis pagal tą pačią taisyklę, tačiau duomenų atvaizdavimas 
NEGALI būti paleistas klasės viduje. Iš objekto metodo, naudojantis return komanda 
susigrąžinkite duomenis į ciklą ir juos atspausdinkite jame.

 */

class Companies {
	
	public $name;
	public $address;
	public $employee_count; 
	public $file;
											
	public function __construct($name,$address,$employee_count) {
		$this->name = $name;
		$this->address = $address;
		$this->employee_count = $employee_count;		
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getAddress() {
		return $this->address;
	}
	
		public function getEmployee_count() {
		return $this->employee_count;
	}
}
    $target ='companies.json';
	$get_data = file_get_contents($target);
	$data_decoded = json_decode($get_data,true);

	echo '<h3>SBA grupę sudaro šios įmonės:</h3>';

	foreach ($data_decoded as $array => $company) {
		
		$name = $company["company"];
		$address = $company["address"];
		$employee_count = $company["employee_count"]; 
			
		$sba = new Companies($name,$address,$employee_count);
		echo 'Įmonė ';
		echo $sba -> getName();
		echo ' yra adresu: '; 
		echo $sba -> getAddress();
		echo ', turi viso ';
		echo $sba -> getEmployee_count();
		echo ' darbuotojų<br>';
	}


?>
