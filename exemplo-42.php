<?php

echo time();//Ele pega a quantidade de segundos desde 01/01/1970
echo "<br><br />";

echo "Pegando a data e a hora atual (usando timestamp): <br>";
echo date("d/m/Y H:i:s",1546031689);//Imprime dia, mês e ano; sem parâmetros ela não roda
echo "<br><br />";

//Obtendo o timestamp() para o caso de usa-lo em outro lugar do código
$ts = strtotime("+1 week");
echo date("l, d/m/Y",$ts);

?>