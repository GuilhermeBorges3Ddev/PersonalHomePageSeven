<?php

/* Essa classe nativa, a DateTime() falada nesse exemplo será mutada, ou seja,
acrescentaremos 15 dias na data corrente usando outra função, a DataInterval() */

$dt = new DateTime();

//Acessaremos o método 'format' da classe DateTime
echo "Imprimindo a data e a hora/minutos/segundos atual: <br>";
echo $dt->format("d/m/Y H:i:s");
echo "<br><br/>";

//Usaremos a classe DateInterval, que usa 'P' para indicar período e 'D' para indicar dias
$periodo = new DateInterval("P15D");
$dt->add($periodo);//Para subtrair usaríamos a função oposta, a sub()

echo "Retornando a data atual adicionada de 15 dias: <br/>";
echo $dt->format("d/m/Y H:i:s");

?>
