<?php

function soma(int ...$valores):float {//O '...' nos indica um array de inteiros como argumento

	return array_sum($valores);//Esta função faz a soma automática do array

}

echo var_dump(soma(2, 2));//Vemos a alteração do tipo de retorno de int para float
echo "<br><br />";

echo soma(25,33);//Converte o return para float
echo "<br><br />";

echo soma(1.2, 3.2);//O casting obriga os $valores serem  int, mesmo eles sendo float
echo "<br><br />";

?>