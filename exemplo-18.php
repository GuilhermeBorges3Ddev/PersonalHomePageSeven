<?php

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "Criança";

} else if ($qualASuaIdade < $idadeMaior) {
	
	echo "Adolescente";

} elseif ($qualASuaIdade < $idadeMaior) {
	
	echo "Adolescente";

} else {

	echo "Idoso";
}

echo "<br />";

//Uso do operador ternário
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>