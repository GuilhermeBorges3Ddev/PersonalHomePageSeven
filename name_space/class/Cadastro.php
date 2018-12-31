<?php

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	//Getters
	public function getNome():string{
		return $this->nome;
	}
	public function getEmail():string{
		return $this->email;
	}
	public function getSenha():string{
		return $this->senha;
	}

	//Setters
	public function setNome($pNome){
		$this->nome = $pNome;
	}
	public function setEmail($pEmail){
		$this->email = $pEmail;
	}
	public function setSenha($pSenha){
		$this->senha = $pSenha;
	}

	//Método que retorna o array de dados do objeto serializado
	public function __toString(){

		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha(),
		));
		
	}
}

?>