<?php 
	echo "<br/> Olá seja bem vindo".$_SERVER['REMOTE_ADDR']."<br/>";
	echo "<br/> Você está usando o navegador <br/> " .$_SERVER['HTTP_USER_AGENT'];

	define ("PI", 3.14162537);
	define ("DISC", "MATEMÁTICA");
	echo "<br/>o valor do pi é ".PI;
	echo "<br/>o nome do curso é ".DISC . "<br/>";

	/*$CURSO = 7;
	$CURSO += 2;

	$CURSO = $CURSO + 2 ;

	$resto = $resto %2;

	$soma = 0;

	$valor = 10;

	$soma = $soma + $valor;

	$cont++

	$cont = $cont + 1 */

	$opção = 2;
	switch ($opção) {
		case 1: 
		echo "A opção 1 foi selecuionada";
		break;
		case 2: 
		echo "A opção 2 foi selecuionada";
		break;
		case 3: 
		echo "A opção 3 foi selecuionada";
		break;
		default:
		echo "Opção incorreta";
		break;
	}
 ?>