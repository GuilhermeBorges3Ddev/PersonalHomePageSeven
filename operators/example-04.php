<?php

$a = 55.0;
$b = 55;

//Operadores de comparação
var_dump($a > $b);
echo "<br/>";
var_dump($a < $b);
echo "<br/>";
//var_dump($a = $b); ---> Nunca podemos fazer isto, pois estamos atribuindo no var_dump();
echo "<br/>";
var_dump($a == $b);//Compara só o valor
echo "<br/>";
var_dump($a === $b);//Compara valor e tipo
echo "<br/>";
var_dump($a != $b);
echo "<br/>";
var_dump($a !== $b);

?>