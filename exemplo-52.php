<?php

interface Aviao {

	//Estes dois métodos serão implementados na classe abstrata
	public function decolar($pVelocidade);
	public function pousar($hPouso);

}

abstract class Bong754 implements Aviao {

	public function decolar($velocidade){
		echo "A aeronave acelerou até " . $velocidade . " milhas/h";
	}
	public function pousar($hPouso){
		echo "O aeronova pousou às " . $horas . " horas";
	}

}

class MiniBong754 extends Bong754 {

	//Mesmo ela herdando a classe Bong754 nada impede que ela tenha seus próprios métodos
	public function manutencao(){}

}

$aeronave = new MiniBong754();//Essa classe só pode implementar uma classe abstrata, porém N interfaces
$aeronave->decolar(655);
?>