<?php

$a = 10;

function trocaValor(&$b){

	$b += 50;

	return $b;
}

echo trocaValor($a);//Espera-se que haja o retorno do valor '60'
echo "<br><br/>";

echo $a;//A variável foi alterada
echo "<br><br/>";

echo trocaValor($a);//Novo incremento atualizando $a, ou seja, passagem por referência novamente funcionando

?>