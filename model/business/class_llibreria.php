<?php

class llibreria {
    private $nameLib;

    public function __construct($nameLib) {
		$this->setNameLib($nameLib);
    }

	public function getNameLib(){
		return $this->nameLib;
	}

	public function setNameLib($value){
		$this->nameLib = $value;
	}
	
    public function veureLlibreria() {
        $llibredb = new llibredb();
        $arraydeLlibres = $llibredb->veureLlibreriadb();    
		return $arraydeLlibres;
    }	
	
	public function afegirLlibre($titol, $autor, $editorial) {
		$llibre = new llibre($titol, $autor, $editorial);
		$llibre->inserirLlibre();
		
	}

}
?>