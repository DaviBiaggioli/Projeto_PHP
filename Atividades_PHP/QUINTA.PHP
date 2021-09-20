<?php 
echo "Esse programa define o salário liquido de um professor:<br/>";
$vlr_h = 50;
$num_a = 120;
$pdinss = 10;
$sb = ($vlr_h * $num_a);
$sl = $sb - $sb * ($pdinss*0.01);
echo "o salário liquido é ".$sl;
 ?>