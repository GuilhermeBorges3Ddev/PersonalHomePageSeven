<?php

/* 
Este exemplo trata de interfaces, que são como contratos que obrigam os métodos
que implementam a interface a implementar todos os métodos por padrão. 
*/ 

interface Veiculo {

	//Obrigando todas as classes usarem os seguintes métodos:
	public function acelerar($pVelocidade);
	public function freiar($pVelocidade);
	public function trocarMarcha($pMarcha);

}

class Civic implements Veiculo {

	public function acelerar($velocidade){
		echo "O veículo acelerou até " . $velocidade . " km/h";
	}
	public function freiar($velocidade){
		echo "O veículo freiou até " . $velocidade . " km/h";
	}
	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha;
	}
}

//Mesmo não usando todos a classe precisa ter todos os métodos que ela prometeu implementar
$carro = new Civic();
$carro->trocarMarcha(1);

?>