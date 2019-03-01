<?php

/* Neste exemplo temos 2 funções em que usamos seu return para operarmos fora de seu escopo */

function ola(){

	//echo "Bem Vindo Usuário!<br />";
	return "Bem Vindo Usuário!";
}

//Chamada de função
//ola();
echo ola();
echo "<br><br />";

//Colocando o conteúdo do retorno em uma variável
$frase  = ola();

//Verificando o tamanho da frase retornada ao usuário
echo "Esta mensagem acima possui: ";
echo strlen($frase) . " caracteres, contando os espaços em branco <br><br />";

//Usando a declaração da função com sintaxe mínima
function salario(){ return 946.00;}
echo "Maria recebeu um decimo terceiro salario de: " . (salario()*3);

?>