<?php

/* Toda função que roda sob uma variável ou comando e não possui retorno pode-se considerar anônima */

//Função anônima utilizando parâmetro
function test($callback){

	//Processo supostamente lento colocamos uma func anônima para testar o tempo de execução por exemplo
	$callback();

}

test(function(){

	echo "Analisando o retorno da função anônima: ";

});

//Função anônima passada em uma variável
$fn = function($a){

	var_dump($a);
	echo "<br><br />";

};

$fn("Reveja o código!");

?>