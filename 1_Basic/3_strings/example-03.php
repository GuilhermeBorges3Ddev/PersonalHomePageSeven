<?php

//Funções para Strings Php que realizam troca, busca e retirada de partes da String

$empresa = "Hcode";//Vamos trocar o "o" pelo "0" e o "e" pelo "3"
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;
echo "<br />";

//Usando strpos() para procura de palavra retornando a posição na String
$frase = "A repetição é a mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, "mãe");//Sintaxe alvo,busca ---> O nome $q é a sintaxe do google para query
var_dump($q);
echo "<br />";

//Pega todo texto até o resultado de $q, que é "mãe" na posição 17
$texto = substr($frase, 0, $q);
var_dump($texto);
echo "<br />";

//Pega o texto de 17 para frente
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
?>