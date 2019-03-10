<?php

//Tipo de banco -> Nome do banco -> Onde o banco fica -> Usuário -> Senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//Assim como no MySQLi nós usamos o prepare para dizer ao DB o que esperar
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Mandando para o DB o nosso prepare()
$stmt->execute();

//Agora diferentemente do MySQLi nós fatiaremos de uma vez só as 'rows' da consulta
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Percorrendo parte à parte do resultado da query
foreach ($results as $row) {

	//Pegando o key_value de cada row
	foreach ($row as $key => $value) {
	
		echo "<strong>".$key.":</strong>".$value."<br/>";

	}

	echo "---------------------------------------------<br/>";

}

?>