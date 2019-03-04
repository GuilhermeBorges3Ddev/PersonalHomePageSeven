<?php

/* Este exemplo aplica diretamente um conceito fundamental da POO, a herança */

class Documento {

	//Número genérico e passivo de atribuição à qualquer documento
	private $numero;

	//Getter and Setter
	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($pNumero){
		$this->numero = $pNumero;
	}

}

class CPF extends Documento {

	public function validar():bool{
		//Validação simplificada para um CPF que não atenda os 11 algarismos
		if(strlen($this->getNumero()) < 11){
			return false;
		}else{
			return true;
		}
	}
}

$doc = new CPF();//Instanciando um CPF qualquer
$doc->setNumero("111222333-44");//Usando método da classe pai
var_dump($doc->validar());//Usando método da classe filha

echo "<br>";

echo $doc->getNumero();//Novamente usando um método da classe pai

?>