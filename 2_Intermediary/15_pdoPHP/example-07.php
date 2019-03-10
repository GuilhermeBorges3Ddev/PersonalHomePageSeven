<?php

//Nome do banco -> Database -> Local/Nome da Instância -> Estado de Conexão (0/1.mono/multithread) -> Login -> Senha
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//Execução da atualização com a notação de id
$stmt = $conn->prepare("UPDATE  tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "joao";
$password = "qwerty";
$id = 2;

//Modfica valores dos nossos id's passados na função prepare()
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados alterados para o usuário com ID igual a 2!";

?>