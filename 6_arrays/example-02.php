<?php

$pessoas = array( );

//Adicionando itens no Array após a sua criação, quebrando em 2 inserções separadas

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

print_r($pessoas[0]);//Imprimindo nome e idade de João
echo "<br ><br />";
print_r($pessoas[0]['nome']);//Imprimindo somente o nome do João

?>