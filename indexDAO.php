<?php

require_once("configDAO.php");

//Instancia um objeto da classe que criamos em Sql.php
$sql = new Sql();

//Essa variável recebe o conteúdo da query passada pela função select(), e é usada como um JSON decodificado em array()
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

?>