<?php

/* Este exemplo mostra a diferença de passagem de parâmetros por valor e por referência */

$a = 10;

function trocaValor(&$b){

	$b += 50;

	return $b;
}

echo trocaValor($a);//Espera-se que haja o retorno do valor '60'
echo "<br><br/>";

echo $a;//A variável foi alterada
echo "<br><br/>";

trocaValor($a);//Novo incremento atualizando $a, ou seja, passagem por referência novamente funcionando

echo $a;//A variável foi alterada agora para 110, pois atualizamos o último endereço de memória com +50.
echo "<br><br/>";

?>