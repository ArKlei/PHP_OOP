<?php

class Companies extends \classes\Abstrakcija {
	
	public $name;
	public $address;
	public $employee_count; 
	
	const TEXT = '<h5>Grupės tinklapio adresas:</h5>';
	public static $sba_www =  '<a href="https://sba.lt/lt">https://sba.lt/lt</a><p>';
	
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



?>
