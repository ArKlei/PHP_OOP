<?php


class Furniture extends Companies {
	
	public static $group='SBA Home baldų grupė';

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
	
	public static function returnGroup () {
		
		return self::$group;
		
	}
	
	public static function takeFromParentText () {
		
		return parent::sba_text();
		
	}
	
	public static function takeFromParentWww () {
		
		return parent::sba_www();
		
	}

}

?>