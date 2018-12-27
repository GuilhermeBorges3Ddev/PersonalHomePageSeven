<?php

$frutas = array("laranja","abacaxi","melancia");

//Esse comando exibe as estruturas internas do array: índices e valores
print_r($frutas);

echo "<br />";

//Quanto a coluna é == '0' sempre haverá uma montadora, quando não é um modelo
$carros[0][0] = "Chevrolet";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Focus";
$carros[1][2] = "Fiesta";
$carros[1][3] = "Fusion";

echo $carros[0][3];//último carro da Chevrolet
echo "<br />";

echo end($carros[1]);//Pegamos o último carro da Ford

?>