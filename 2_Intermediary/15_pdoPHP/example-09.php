<?php

//Nome do banco -> Database -> Local/Nome da Instância -> Estado de Conexão (0/1.mono/multithread) -> Login -> Senha
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//Marcador de início de uma transação
$conn->beginTransaction();

//Execução da exclusão com a notação de id, só que ao invés de :ID usaremos a '?'
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = 2;

//Caso houvesse mais de um parâmetro marcado com '?' teríamos que passá-lo na ordem em que foram usados
$stmt->execute(array($id));

//No caso do rollback() ele fará a operação mas não apaga o banco com a deleção criada
//$conn->rollback();
$conn->commit();

echo "Transacao efetuada com sucesso!";

?>