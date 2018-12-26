<?php

include "exemplo-16.php";//Incluindo arquivos do mesmo diretório
require "exemplo-15.php";//Incluindo outro arquivo via require
require_once "exemplo-15.php";//Só traz o arquivo se ele não tiver sido chamado anteriormente


$resultado = somar(10,20);
echo "<br />";
echo '------------------------------- <br />';
echo $resultado;
?>