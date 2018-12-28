<?php

//Se quisermos settar uma seção fixa nós podemos, dentro do session_id()
session_id('9em4kfinrbv0hmr95rdn1sjr36');

require_once("config.php");

//Algo interessante de se testar é abrir este arquivo no navegador normal e na aba anônima..
//Repararemos que os IDs são diferentes, já que para o servidor é uma nova sessão aberta.
echo session_id();
echo "<br><br />";

//Função responsável for forçar a abertura de uma nova sessão!
session_regenerate_id();

echo session_id();//Imprime o ID da nova sessão

var_dump($_SESSION);
?>