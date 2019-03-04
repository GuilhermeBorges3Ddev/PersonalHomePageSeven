<?php

/* Neste arquivo nós criamos uma função com valor de parâmetro default e testamos a passagem enviando o
parâmetro e também sem enviar  */

function ola($usuario, $periodo = ",bom dia!"){

	return "Bem Vindo $usuario $periodo <br><br />";

}

//Retornando a mensagem de boas vindas à 3 usuários de maneira customizada:
echo ola("Marcos",",boa noite!");

echo ola("Cezar",",boa tarde!");

echo ola("Adolfo");//Como nada foi passado assume-se o valor default

?>