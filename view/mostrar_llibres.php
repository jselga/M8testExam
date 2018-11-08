<?php
		require_once '../controller/function_AutoLoad.php'; 	
		require_once '../config/config.inc.php';
		
		if(isset($_SESSION['llibreria'])){
			$llibreria= unserialize($_SESSION['llibreria']);
		}
		else
		{
			$llibreria = New llibreria("Llibreria Vallbona");			
		}
		$arrayLlibres = $llibreria->veureLlibreria();
		?> 
		<table border="1">
		<tr><th>LLIBRERIA: </h3></th> <th><?php echo $llibreria->getNameLib(); ?></th>	</tr>
		<?php 
		$cont = 0;
		while($cont < count($arrayLlibres)){ 		
		?>		
			<tr><td><b>Llibre num: </td> <td><?php echo $arrayLlibres[$cont]->getId(); ?></td>		</tr>
			<tr><td>Titol: </td><td><?php echo $arrayLlibres[$cont]->getTitol(); ?></td>			</tr>
			<tr><td>autor: </td><td> <?php echo $arrayLlibres[$cont]->getAutor(); ?></td>			</tr>
			<tr><td>editorial: </td><td> <?php echo $arrayLlibres[$cont]->getEditorial(); ?> </td>  </tr>
		<?php $cont++;
		}			
?>
		</table>
        <br>
		<a href="../index.php">Inici</a>

