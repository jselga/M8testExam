<?php
	session_start();
	require_once 'function_AutoLoad.php'; 	
	require_once '../config/config.inc.php';
	require_once '../view/printError.php';

	$msg = null;
	try {
		if (isset($_POST['submit'])) { 	
		
			if(isset($_SESSION['llibreria'])){
				$llibreria= unserialize($_SESSION['llibreria']);
			}
			else {
				$llibreria = New llibreria("Llibreria Vallbona");			
			}		
			$llibreria->afegirLlibre(addslashes($_POST['titol']), addslashes($_POST['autor']), addslashes($_POST['editorial']));
			$msg = "Dades introduides correctament!!";			
		}
		else {
			$msg = "You should come from the form";
		}
	} catch (Exception $e) {
		$msg = "Error en introduir les dades .$e";
	}
	
	if ($msg != null) {
		printError($msg);
	}
?>
 <br>
 <a href="../index.php">Inici</a>
