<?php

/* Usaremos aqui a variável super global de sessão setado no Example-01.php */

require_once("config.php");

session_unset( $_SESSION['nome']);
//session_destroy( $_SESSION['nome']); --> Além dele limpar ele te desloga da session

echo $_SESSION['nome'];

?>