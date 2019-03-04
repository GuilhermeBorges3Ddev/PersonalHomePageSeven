<?php

require_once("config.php");

//Sintaxe de uso do namespace, pois temos que especificar se usamos ./Cadastro ou ./Cliente/Cadastro
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sideaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

//Chamando o método __toString do objeto Cadastro que acabamos de setar
echo $cad;

//Usando a classe "Cadastro do namespace 'Cliente'"
echo "<br><br/>";
$cad->registrarVenda();

?>