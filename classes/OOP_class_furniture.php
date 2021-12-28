<?php

spl_autoload_register(function () {
    include './OOP_class_companies.php';
	include '../helpers/OOP_helper_www.php';
});

class Furniture extends Companies {

    public function __construct($name,$address,$employee_count,$industry) {
		$this->name = $name;
		$this->address = $address;
		$this->employee_count = $employee_count;
		$this->industry = $industry;		
	}
	
	public function data() {
	
		if ($this->employee_count > 3) {
			return '<h1>Įmonė '.$this->name.' yra adresu: '.$this->address.', turi viso '.$this->employee_count.' darbuotojų, sritis: '.$this->industry.'</h1>';
		}
	}

}

$furniture_company = new Furniture('AB Klaipėdos baldai','Joniškės g.21, Klaipėda',rand(1,100),'baldų grupė');

echo $furniture_company->data();

$www = new Helper();

echo '<h2>Grupės tinklapio adresas: <a href="'.$www::WWW.'">'.$www::WWW.'</a>';

?>