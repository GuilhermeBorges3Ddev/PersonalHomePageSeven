<?php

/* Usamos aqui a função setlocale() para pegar o servidor pt-br, mostrando
o dia e o mês do ano do país em questão, Brasil, com a função strftime() */

//A função abaixo diz qual o nome do mês, do dia da semana em pt-br
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

//Retorna o dia (%A) e o mês (%B), com as primeiras palavras maiúsculas
echo "Retornando o dia atual e o mês atual: <br>";
echo ucwords(strftime("%A"));
echo "<br />";
echo ucwords(strftime("%B"));

?>