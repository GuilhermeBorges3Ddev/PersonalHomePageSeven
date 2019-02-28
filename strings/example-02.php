<?php

//Funções para Strings PHP

$nome = "joao silva";
$nome = strtoupper($nome);//Função que recebe uma String e o converte em uma maiúscula
echo $nome;
echo "<br />";

$nome = strtolower($nome);//Função que recebe uma String e o converte em uma minúscula
echo $nome;
echo "<br />";

//Vamos agora mudar a primeira letra de cada palavra para maiúscula
echo ucwords($nome);
echo "<br />";

//Mudando apenas a primeira letra da primeira palavra
echo ucfirst($nome);
echo "<br />";

?>