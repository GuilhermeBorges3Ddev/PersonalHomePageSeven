<?php

//Nome do banco -> Database -> Local/Nome da Instância -> Estado de Conexão (0/1.mono/multithread) -> Login -> Senha
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

//Execução da inserção com a notação de id
$stmt = $conn->prepare("UPDATE  tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "joao";
$password = "qwerty";
$id = 2;

//Atribui valores aos nossos id's passados na função prepare()
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$password);

$stmt->execute();

echo "Dados alterados para o usuário com ID igual a 2!";

?>