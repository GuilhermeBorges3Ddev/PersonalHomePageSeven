<?php

$nome = "Meu escopo é global";

function teste() {
	global $nome;//Pegamos uma variável global para tratar localmente
	echo $nome;
}

function teste2() {
	$nome = "Meu escopo é local";
	echo $nome." no teste2, funciono somente aqui"; 
}

teste();
echo "<br/>";
teste2();

?>