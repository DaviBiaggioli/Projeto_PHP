<?php 

	/*$nome = array("Carlos","João","Dudu","Gabriel","Paulo");
	echo "Nomes do array<br/>";
	foreach ($nome as $nomes ) {
		echo "</br>".$nomes;}*/

	$num = array(1,2,3,4,5);
	foreach ($num as $valor ) {
		echo "</br>O valor é ".$valor. ",";}

	$num[0] = "um";
	$num[1] = "dois";
	$num[2] = "três";
	$num[3] = "quatro";
	$num[4] = "cinco";

	foreach ($num as $valor ) {
		echo "</br>Valor é ".$valor;}
 ?>