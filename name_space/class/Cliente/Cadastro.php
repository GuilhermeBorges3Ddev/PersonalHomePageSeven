<?php

namespace Cliente;

//Volte na raiz do nomespace cliente e pegue o 'Cadastro' de lá
class Cadastro extends \Cadastro{

	public function registrarVenda(){

		echo "Foi registrada uma venda para o cliente " . $this->getNome();

	}

}

?>