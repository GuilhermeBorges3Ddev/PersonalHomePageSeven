<?php

//Nome do banco -> Database -> Local/Nome da Instância -> Estado de Conexão (0/1.mono/multithread) -> Login -> Senha
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

//Execução da inserção com a notação de id
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(:LOGIN,:PASSWORD)");
$login = 'jose';
$password = "1234567890";

//Atribui valores aos nossos id's passados na função prepare()
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$login);

$stmt->execute();

echo "Dados inseridos com sucesso!";

?>