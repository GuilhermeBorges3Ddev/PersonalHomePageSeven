<?php
/*PHP é case sensitive*/
$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "João";
$nome2 = "de Deus";
//Não podemos iniciar com número: $1nome = "Guilherme";

$nomeCompleto = $nome1." ".$nome2; //Underscore é aceito no início da declaração, apneas este caractere especial é aceito
// Para forçar uma parada de execução colocamos a linha --------> exit;


// $this é um nome pré-definido, também não podemos declarar varriáveis com este nome

echo "<br/>";

echo $nomeCompleto;
unset($nomeCompleto);

if(isset($nomeCompleto)){//Função isset verifica se a variável foi setada
	echo $nomeCompleto;	
}

echo $nomeCompleto;//Retorna 'notice', pois essa função limpa a variável da memória

?>