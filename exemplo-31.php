<?php

//Esse arquivo usa a variável de seção criada no arquivo 'exemplo-30.php'
require_once("config.php");

session_unset();//Sem parâmetros essa seção destrói todas as variáveis de seção, mas mantem usuário
//session_destroy(); --> Além de apagar as variáveis ele faz o kick do usuário

echo $_SESSION['nome'];

?>