<?php 
/*
	VARIAVEIS: 
	Salário Hora
	Horas Trabalhadas
	Salário Bruto
	Numero de Dependentes
	INSS
	IR
*/
	$NmrD = 4;
	$HrsT = 8;
	$SlrH = 50;
	$SlrB = $HrsT*$SlrH+50*$NmrD;

	echo "Este programa mostra seu salário líquido. <br/> Baseado no seu valor hora e descontando INSS e IR<br/> ";

			#Desconto INSS
		if ($SlrB <= 1000) {
			$INSS = $SlrB * 8.5/100;
		}
		else if ($SlrB>1000) {
			$INSS = $SlrB * 9/100;
		}

			#Desconto IR
		
		if ($SlrB<=500) {
			$IR=0;
		}
		else if ($SlrB>500 && $SlrB<=1000) {
			$IR=$SlrB*5/100;
		}
		else if ($SlrB>1000) {
			$IR=$SlrB*7/100;
		}

		$SlrL = $SlrB-$IR-$INSS;
		echo "<br/>Seu salário líquido é ".$SlrL;
 ?>