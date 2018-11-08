<?php

class llibredb{

	public function inserirdb($llibre) {		
	
		$query="insert into llibres (titol, autor, editorial) values ('".$llibre->getTitol()."', '".$llibre->getAutor()."', '".$llibre->getEditorial()."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
	} 
    
	public function veureLlibreriadb() {
        $query="SELECT * FROM llibres;";				
		$con = new db();
		$consulta = $con->consulta($query);
		$con->close();

		$cont = 0;
		while ($row=mysqli_fetch_array($consulta)) {
            $llibre = new llibre($row["titol"], $row["autor"], $row["editorial"]);
			$llibre->setId($row["id"]);
			$arrayLlibres[$cont] = $llibre;
			$cont++;
			
		}
		return $arrayLlibres;	  
    }

}    
 ?>
