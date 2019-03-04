<?php

//Operador SpaceShip, ligado à versões PHP >= 7.0.0
$a = 50;
$b = 35;
var_dump($a <=> $b);//Se "a" for maior traz 1, se for igual traz 0, se a for menor traz -1
echo "<br/>";

//Operador Null Coalesce, ligado à versões PHP >= 7.0.0
$c = NULL;
$d = NULL;
$e = 10;
echo $c ?? $d ?? $e;//Leia "c" se nao for nulo, se for leia "d", se ele também for leia "e"
//OBS: Ele para no primeiro não nulo, se todos forem nulos ele não retorna nada

?>