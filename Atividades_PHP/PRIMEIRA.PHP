<?php  
	
	echo "Esse programa adiciona porcentagem ao número colocado. <br/>1 - 10% <br/>3 - 25% <br/>4 - 30% <br/>8 - 50% <br/>";
	$codigo = 5;
	$valor = 100;
	$pda;
		switch ($codigo) {
			case '1':
				$pda = $valor * 1.1;
				echo "<br/>O resultado do acréscimo é ".$pda;
				break;
			case '3':
				$pda = $valor * 1.25;
				echo "<br/>O resultado do acréscimo é ".$pda;
				break;
			case '4':
				$pda = $valor * 1.3;
				echo "<br/>O resultado do acréscimo é ".$pda;
				break;
			case '8':
				$pda = $valor * 1.5;
				echo "<br/>O resultado do acréscimo é ".$pda;
				break;
			
			default:
				echo "<br/>Código não identificado";
				break;
		}



?>