<?php

$pessoa = array(
	'nome' => 'Flavio',
	'idade' => 20
);

//Alterando por referência um valor dentro do foreach()
foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value += 10;
	
	echo $value ."<br>";

}

//Dentro e fora do array $pessoa o valor será 30 para a idade, que é 'integer'
print_r($pessoa);

?>