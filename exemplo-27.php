<?php

$pessoas = array( );

//Usando as 2 inserções no array $pessoas para trabalharmos nele como um JSON

array_push($pessoas, array(
	'nome' => 'Joao',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

echo json_encode($pessoas);//Que gera: [{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]
echo "<br ><br />";

//Pegando o conteúdo encondificado e jogando em um array
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
$data = json_decode($json, true);//Passamos o 'true' para ele não jogar o vetor como um objeto

var_dump($data);

?>