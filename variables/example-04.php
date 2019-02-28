<?php

/* 
	Para acessarmos o array super global $_GET usamos [], isso também vale para $_POST...
	Na URL abaixo, tudo que está à esquerda da '?' é o endereço, e à direita são variáveis.
	OBS: Todo retorno destes 2 arrays super globais são strings 
	---> http://127.0.0.1/variaveisPHP/exemplo-04.php?a=123&b=456 
*/
$nomeA = (int)$_GET["a"];//pega tudo à direita da "?" na URL, ou seja, o valor de "a" passado via get
$nomeB = (int)$_GET["b"];
var_dump($nomeA);//Exibe o tipo pego por "a", seu tamanho e seu valor
echo "<br/>";
var_dump($nomeB);
echo "<br/>";
echo "<br/>";

/* 
	Lembrando que a URL é o uniform resource locale... logo são passadas nela as informações
	que serão requisitadas ao se acessar o ambiente desejado.
	OBS: Cada pedaço da URL é uma URI
*/
echo "-----> IP do usuário e diretório do arquivo acessado no server: <br />";
$ip = $_SERVER["REMOTE_ADDR"];//Pegando o IP do usuário pela sessão ativa, outra var super-global
echo $ip;
echo "<br/>";
$ip2 = $_SERVER["SCRIPT_NAME"];//Pegando do ambiente o nome do arquivo acessado
echo $ip2;

?>