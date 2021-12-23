<?php

//Validacija

$fields = [
    'name' => 'text',
    'surname' => 'text',
    'id' => 'int'
]; //Schema

$post = [
    'name' => 'Arunas',
    'surname' => 'Kleinas',
    'id' => '37510180675'
];

//Klasė validavimui
class Validator {
	
    public $post; //$_POST duomenys iš inputų
    public $fields; //Validavimu iskirtas masyvas tokios pat struktūros	// įprastas konstruktorius su paduodamais masyvais iš inputų ir validavimo masyvo
	
	public function __construct($post, $fields) {

        $this->post   = $post; // šio objekto post masyvas lygus gautam masyvui per post iš inputų
        $this->fields = $fields; //šio objekto validavimo masyvas lygus tam pačiam užduotam validavimo masyvui (nesikeičia kintamieji)

		if($this->check_arg($this->post)) { // kitos funkcijos paleidimas šiam objektui su gauto masyvo iš inputų perdavimu - tikrina, jeigu yra įkritusios reikšmės/nėra tuščia, paleisti kitą funkciją - papildomą tikrinimą ir raktų spausdinimą
			$this->process_fields(); // kitos funkcijos paleidimas šiam objektui
		}
    }

    public function check_arg($arg) { // reikšmių buvimo tikrinimo funkcija

        return !empty($arg) ? true : false; // nesant reikšmių, išmes false ir nevykdys toliau
        
    }

    public function process_fields() { // funkcija papildomai tikrinti ar įkritę iš inputų raktai atitinka validavimo masyvo raktus

        foreach($this->fields as $key => $value) { 

            if($this->check_fields($key, $this->post) ) // tikrina, paleidžiant kitą funkciją su įkritusiais iš inputų duomenimis ar yra raktai. Esant - spausdina raktų pavadinimus 
                echo $key . '<br />';
			
			
			foreach($this->post as $key2 => $value2) {
				
				if ($key == $key2) {
					echo 'atitinka raktai<br>';
				}
				
			}
        }
    }

    public function check_fields($key) { // tikrinimo funkcija, papildoma, nes dublioja check_arg()
        return array_key_exists($key, $this->post) ? true : false; // gražina true, jeigu yra raktai
    }

}

//new Validator($_POST['prekes'], $fields);
$objektas = new Validator($post, $fields);

//print_r($objektas);

?>