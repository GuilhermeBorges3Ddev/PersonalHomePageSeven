<?php

function ola(){

	//Essa função pega os argumentos passados e os retorna dentro de um array
	$argumentos = func_get_args();

	return $argumentos;

}

//Esse var_dump nos retorna o que foi pego como parâmetro no escopo local e nos joga no global
var_dump(ola("Bom dia", 10));

?>