<?php

//http://127.0.0.1/variaveisPHP/exemplo-04.php?a=123&b=456
$nome = (int)$_GET["a"];//pega tudo à direita da "?" na URL, ou seja, o valor de "a" passado via get
var_dump($nome);//Exibe o tipo pego por "a", seu tamanho e seu valor
echo "<br/>";
$ip = $_SERVER["REMOTE_ADDR"];//Pegando o IP do usuário pela sessão ativa, outra var super-global
echo $ip;
echo "<br/>";
$ip2 = $_SERVER["SCRIPT_NAME"];//Pegando do ambiente o nome do arquivo acessado
echo $ip2;
?>