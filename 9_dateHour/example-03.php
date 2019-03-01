<?php

$dt = new DateTime();

//Acessaremos o método 'format' da classe DateTime
echo "Imprimindo a data e a hora/minutos/segundos atual: <br>";
echo $dt->format("d/m/Y H:i:s");
echo "<br><br/>";

//Usaremos a classe DateInterval, que usa 'P' para indicar período e 'D' para indicar dias
$periodo = new DateInterval("P15D");
$dt->add($periodo);

echo "Retornando a data atual adicionada de 15 dias: <br/>";
echo $dt->format("d/m/Y H:i:s");

?>
