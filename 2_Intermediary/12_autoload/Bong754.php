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
		echo "O aeronava pousou às " . $horas . " horas";
	}

}

?>