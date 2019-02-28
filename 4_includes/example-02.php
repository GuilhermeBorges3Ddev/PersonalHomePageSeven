<?php

//include "inc/example-01.php"; --> Incluindo via include não temos garantia de funcionanmento, lembrar inc_path e extenal include
//require "inc/example-01.php"; --> Incluindo via require obriga que o arquivo exista e funcione
require_once "inc/example-01.php"; //--> Traz o arquivo se ele não for chamado anteriormente e se estiver funcionando

$resultado = somar(10,20);
echo "<br />";
echo '------------------------------- <br />';
echo $resultado;
?>