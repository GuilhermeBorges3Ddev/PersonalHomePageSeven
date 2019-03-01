<?php

/* Neste exemplo usaremos constantes e arrays constantes */

define("SERVIDOR", "127.0.0.1");//Função define() usa como primeiro parâmetro o nome seguido do valor

echo SERVIDOR;//Constantes não precisam do dollar '$' 
echo "<br><br/>";

//Definindo um Array dentro de uma constante, novidade das versões PHP >= 7.0.0
define("BANCO_DE_DADOS", [
	'127.0.0.0',
	'root',
	'password123',
	'textBD'
],true);//Com o 3º parâmetro 'true' nós tornamos a constante Case Insensitive

print_r(BANCO_DE_DADOS);

?>