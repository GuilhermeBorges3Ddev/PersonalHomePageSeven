<?php

/*
A variável $conn opera sobre a mesma conexão utilizada no exemplo-03.php,
porém usaremos aqui o comando select e o fetch para passar a query como JSON
*/

//IP -> Usuário -> Senha -> BD
$conn = new mysqli("localhost","root","","dbphp7");

//Condicional para verificação de erro no conexão
if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;//Retorno vazio = sem erros!!
	exit;

}

//Execução da query salva em variável
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Variável criada para facilitar a transformação da query em array, e depois em JSON
$data = array();

//Percorre linha à linha até dar EOF
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {//fetch_assoc() sem parâmetros também funciona 

	array_push($data, $row);//Adiciona cada $row dentro do array $data

}

//Passamos a query vetorizada para ser convertida em JSON
echo json_encode($data);

?>