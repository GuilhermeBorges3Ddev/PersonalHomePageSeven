<?php
$a = 10;

//Operações de incremento e decremento (pré e pós)

echo $a++;
echo "<br />";
echo $a;//Só agora atualizado é impresso, já que primeiro o valor é atribuido depois incrementado
echo "<br />";
echo "<br />";

echo ++$a;
echo "<br />";
echo $a;//Agora as duas linhas mostram o mesmo, pois é um pré-incremento
echo "<br />";
echo "<br />";

echo --$a;
echo "<br />";
echo $a;//Fazendo as duas linhas mostrarem 11, pois é um pré-decremento

?>