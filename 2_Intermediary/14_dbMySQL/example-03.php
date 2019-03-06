<?php

/*
Nesta aula usamos o PHP para nos conectarmos ao MySQL Workbench e executarmos 
modificações na DB 'bdphp7', onde há nossa tabela 'tb_usuarios'
*/

//IP -> Usuário -> Senha -> BD
$conn = new mysqli("localhost","root","","dbphp7");

//Condicional para verificação de erro no conexão
if ($conn->connect_error){
	echo "Error: " . $conn->connect_error;//Retorno vazio = sem erros!!
	exit;
}

//O método prepare() prepara o banco para o recebimento de comandos DDL/DML
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (?,?)");

//Esse método diz ao banco quais são os tipos de parâmetros que são esperados pelas interrogações
$stmt->bind_param("ss",$login,$pass);//ss significa duas Strings: user e 12345

//Variáveis passadas como referência ao método bind_param()
$login = "user";
$pass = "12345";

//Faz o envio dos comandos dados para o MySQL Workbench
$stmt->execute();

//Adicionando um segundo usuário na tabela tb_usuarios
$login = "root";
$pass = "!@#$";

//Executando no banco a segunda inserção
$stmt->execute();

?>