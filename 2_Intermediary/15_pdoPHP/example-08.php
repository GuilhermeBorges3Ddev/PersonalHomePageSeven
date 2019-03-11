<?php

//Nome do banco -> Database -> Local/Nome da Instância -> Estado de Conexão (0/1.mono/multithread) -> Login -> Senha
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//Execução da exclusão com a notação de id
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$id = 1;

//Deleta os valores do usuário com o ID igual a '1' 
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados deletados para o usuário com ID igual a 1!";

?>