<?php

//Exemplo de um percurso sobre o array de meses usando a sintaxe completa do foreach
$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro" 
);

foreach ($meses as $index => $mes) {

	$i = $index + 1;
	echo "Mês $i --> ".$mes."<br />";

}

?>