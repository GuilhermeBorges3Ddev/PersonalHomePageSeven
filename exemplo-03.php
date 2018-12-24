<?php

//Tipos primitivos
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//Tipos compostos
$frutas = array("abacaxi", "1", "laranja", "2", "manga", "3");
echo $frutas[2];
echo "<br/>";
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br/>";

//Tipos especiais
$arquivo = fopen("exemplo-03.php", "r");//
var_dump($arquivo);
echo "<br/>";
$nulo = NULL;//Sem inicialização, assim que fica uma variável destruída por unsetting
$vazio = "";//Foi iniciado mas não tem informação
?>