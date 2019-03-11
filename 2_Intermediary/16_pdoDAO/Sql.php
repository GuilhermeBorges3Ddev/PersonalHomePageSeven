<?php 

//Essa nossa classe criada herda da classe nativa PDO
class Sql extends PDO {
	
	private $conn;
	
	//Método construtor que cria nossa conexão automaticamente ao acessarmos a classe
	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	//Aqui os parãmetros são tratados como um array, da mesma forma damos um valor para cada chave, dentro do foreach()
	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {	
			$this->setParam($statement, $key, $value);
		}
	}
	
	//Cada parâmetro passado é uma chave que recebe um valor
	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}

	//Essa função recebe uma query DML e seta os parâmetros para preparar o banco para a execução da query
	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}

	//Essa função manda executar todos os parâmetros passados de uma vez nas consultas, por isso seu retorno é :'array'
	public function select($rawQuery, $params = array()):array
	{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
 
 ?>