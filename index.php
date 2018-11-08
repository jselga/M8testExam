<?php	

require_once 'controller/function_AutoLoad.php'; 	

session_start();
	
if(!isset($_SESSION['llibreria'])){
	$llibreria = New llibreria("Llibreria Vallbona");
	$_SESSION['llibreria'] = serialize($llibreria);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Llibreria</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="es" />		
	</head>
	<body>		
			<a href="view/mostrar_llibres.php">Veure tots els llibres</a><br>
			<a href="view/formulari_inserir_llibre.php">Alta llibre</a>
	</body>
</html>
