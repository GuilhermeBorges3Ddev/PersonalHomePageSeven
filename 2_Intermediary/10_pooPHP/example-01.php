<?php

/* Este exemplo contém a criação, acesso e modificação de um método e de um atributo */

class Pessoa {

	//Atributo
	public $nome;

	//Método
	public function falar(){

		return "O meu nome é " . $this->nome;

	}

}

$glaucio = new Pessoa();

//Nós só acessamos e alteramos porque o atributo é público
$glaucio->nome = "Glaucio Daniel Saurom";

//O mesmo vale para o método, que também tem acesso público
echo $glaucio->falar();

?>