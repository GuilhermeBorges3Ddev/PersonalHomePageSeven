<?php

$condicao = true;

//Sorteio de números até que o número '3' seja sortead
while ($condicao) {

	$numero = rand(1, 10);//Essa função gera números aleatórios 'de','até'.

	if($numero === 3){

		echo "TRÊS !!!";
		$condicao = false;

	}

	echo $numero . "  ";	
}

echo "<br />";

//Descontos de 10% em uma compra enquanto o valor for maior ou igual a R$ 100,00
 $total = 150;
 $desconto = 0.9;

 do{

 	$total *= desconto;
 
 } while ($total >= 100);

 echo "Sua compra com desconto têm o valor de R$ $total";
?>