<?php
//Klasės ir Objektai

//Klasė
class Darbuotojas {

    //Trys matomumo variantai 
    //public
    //private
    //protected 

    //Savybes | Properties
    private $vardas;
    private $pavarde;
	private $id;

    //Construct methodas pasileidzia vos tik iniciavus klase
    //__destruct()
    public function __construct($vardas, $pavarde, $id) {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
		$this->id = $id;
		
    }
 
    //Metodas | Method
    public function priskirkVardaPavarde($vardas, $pavarde, $id) {
        //$this - yra kreipimasis į funkciją kurioje yra metodas
        $this->vardas = $vardas;
		$this->pavarde = $pavarde;
		$this->id = $id;
		pakeiskVardaPavarde();
    }
	
	public function pakeiskVardaPavarde($vardas, $pavarde, $id) {
        //$this - yra kreipimasis į funkciją kurioje yra metodas
        $this->vardas = $vardas;
		$this->pavarde = $pavarde;
		$this->id = '0';
    }

    public function isveskVardaPavarde() {
        //$this->setName();
        return $this->vardas;
		return $this->pavarde;
		return $this->id;
    }

}

//Objektas
$darbuotojas1 = new Darbuotojas('Adomas', 'Mickevicius', '37510100685');

//$test->setName('Vilius');

//echo $test->name;

echo $darbuotojas1->isveskVardaPavarde() . '<br />';
echo $darbuotojas1->isveskVardaPavarde();

echo '<pre>';
print_r($darbuotojas1);