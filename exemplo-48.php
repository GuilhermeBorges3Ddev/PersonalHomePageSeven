<?php

class Endereco {

	//Os 3 atributos base da classe
	private $logradouro;
	private $numero;
	private $cidade;

	//O construtor no PHP7 virou um "magical_method", o '__construct'
	public function __construct($l, $n, $c){

		$this->logradouro = $l;
		$this->numero = $n;
		$this->cidade = $c;

	}

	//Força a destruição na memória, útil pra desloggar o objeto do banco
	public function __destruct(){

		var_dump("OBJECT DESTROYED");
	
	}

	public function __toString(){

		return $this->logradouro . ", ". $this->numero . ", ".$this->cidade;

	}

}

//Instanciando via construtor
$meuEndereco = new Endereco("Rua das Rosas","157","Rio de Janeiro");

var_dump($meuEndereco);
echo "<br><br />";

echo($meuEndereco);
echo "<br><br />";

unset($meuEndereco);



?>