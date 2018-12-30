<?php

class Cadastro {

	//Colocando 3 tipos de modificadores de acesso
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

class Programador extends Cadastro{

	//Aqui ele chama o verDados() do programador
	public function verDados(){

		echo get_class($this);//De onde parte este método?!
		echo "<br>";
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
	}

}

//Instanciando
$objeto = new Cadastro();

//Simulando os modificadores agindo nos atributos
//echo $objeto->nome . "<br />"; --> É visto por qualquer um, acesso livre
//echo $objeto->idade . "<br />"; --> Não podemos acessar, somente a própria classe e herdeiros
//echo $objeto->senha . "<br />"; --> Não podemos acessar, somente a própria classe, nem os herdeiros

//Chamada do método de leitura
$objeto->verDados();

//Fazendo o mesmo com o Programador, que por extensão é um tipo de pessoa Cadastrada
$objeto2 = new Programador();
echo "<br>";
$objeto2->verDados();

?>