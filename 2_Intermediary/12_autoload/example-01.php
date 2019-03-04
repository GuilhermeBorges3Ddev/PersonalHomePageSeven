<?php

function incluirClasses($nomeClasse){

//Permitindo que o cógido aceite outra função de autoload do mesmo diretório
	if(file_exists($nomeClasse . ".php") === true){
		require_once($nomeClasse . ".php");
	} 

}

//Nesse caso ele permite mais de um autoload se o if{} for validado
spl_autoload_register("incluirClasses");

//Permitindo autoload para classes de outros diretórios
spl_autoload_register(function($nomeClasse){

	if(file_exists("" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
		require_once("" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	} else {
		echo "<br> Não possuímos classes a serem incluidas nesse diretorio <br />";
	}

});


/* Método mádico que requer uma variavel passada para ser incluída com o require_once */
function __autoload($nomeClasse){

	var_dump($nomeClasse);
	require_once("$nomeClasse.php");
	
}

$aeronave = new MiniBong754();
echo "<br> <br/>";
$aeronave->decolar(1000);

?>