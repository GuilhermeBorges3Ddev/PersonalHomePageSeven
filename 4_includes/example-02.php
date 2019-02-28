<?php

include "inc/example-01.php";//Incluindo arquivos do mesmo diretório
//require "example-01.php"; --> Incluindo outro arquivo via require
//require_once "example-01.php"; --> Só traz o arquivo se ele não tiver sido chamado anteriormente


$resultado = somar(10,20);
echo "<br />";
echo '------------------------------- <br />';
echo $resultado;
?>