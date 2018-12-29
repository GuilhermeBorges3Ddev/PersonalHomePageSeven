<?php

class Carro {

	//O padrão para declaração sempre é private, não queremos expor a classe
	private $modelo;
	private $motor;
	private $ano;

	//Introduzindo os Getters e Setters
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($pModelo){
		$this->modelo = $pModelo;
	}

	public function getMotor():float{
		return $this->motor;
	}
	public function setMotor($pMotor){
		$this->motor = $pMotor;
	}

	public function getAno():int{
		return $this->ano;
	}
	public function setAno($pAno){
		$this->ano = $pAno;
	}

	//Método que exibe todas as informações de um carro
	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"modelo"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

//Instanciando e utilizando o método que exibe tudo
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2018");

var_dump($gol->exibir());
echo "<br><br/>";
print_r($gol->exibir());

?>