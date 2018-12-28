<?php

function ola($usuario, $periodo = ",bom dia!"){

	return "Bem Vindo $usuario $periodo <br><br />";

}

//Retornando a mensagem de boas vindas à 3 usuários de maneira customizada:
echo ola("Marcos",",boa noite!");

echo ola("Cezar",",boa tarde!");

echo ola("Adolfo","!");



?>