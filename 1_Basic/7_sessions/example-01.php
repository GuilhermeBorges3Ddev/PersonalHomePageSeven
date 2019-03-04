<?php

/* Este arquivo mostra variáveis de sessão, que são super globais */

//Chamando arquivo de marcação para sessão ativa nesta página
require_once("config.php");

//Criação de uma única variável de seção para testes
$_SESSION["nome"] = "Hcode";

?>