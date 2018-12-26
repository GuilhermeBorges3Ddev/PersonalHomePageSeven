<?php

for ($i = 0; $i < 10; $i++) {
	//Este exemplo faz a contagem de 1 à 10
	echo $i+1 . "<br />";
}

echo "<br />";

for ($i = 0; $i <= 50; $i += 10) {
	//Este exemplo faz os múltiplos de 20 até chegar em 40, pulando o 50
	if(($i >= 0) && ($i <= 10)) continue;
		if($i === 50) break;
			echo $i . "<br />";
}

echo "<br />";

for ($i = 0; $i < 10; $i--) { 
	//Este for faz o decremento funciona mas gera um loop infinito proposital...
	//Como não chegamos em 10 nunca, em 60 segundos o Php mata o processo.
	echo $i ." ";
}




?>