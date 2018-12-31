<?php

//Impedindo que o programador instancie diretamente um animal
abstract class Animal {

	public function falar(){

		return "Este animal emitiu um som!!";

	}

	public function mover(){

		return "Este animal acaba de se mover!!";

	}	
}

class Cachorro extends Animal{


	public function falar(){

		return "Este animal latiu!!!";	
	
	}

}

class Gato extends Animal {

	public function falar(){

		return "Este animal miou!!!";	
	
	}	
}

class Passaro extends Animal {

	public function falar(){

		return "Este animal piou!!!";	
	
	}

	public function mover(){

		//Chamamos o método da classe mãe explicitamente e de maneira estática
		return parent::mover(). "E ainda voou!!";	
	
	}	
}

$animal = new Cachorro();
echo $animal->falar() . "<br>";
echo $animal->mover() . "<br/>";

echo "----------------------------------------------<br>";

$animal2 = new Gato();
echo $animal2->falar() . "<br>";
echo $animal2->mover() . "<br/>";

echo "----------------------------------------------<br>";

$animal3 = new Passaro();
echo $animal3->falar() . "<br>";
echo $animal3->mover() . "<br>";//Neste mover() teremos o retorno do método de Animal() e Passaro()

?>