<?php

require_once("config.php");

//Sintaxe de uso do namespace
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sideaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

//Usando a classe "Cadastro do namespace 'Cliente'"
echo "<br><br/>";
$cad->registrarVenda();

?>