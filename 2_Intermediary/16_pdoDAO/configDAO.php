<?php

//Método de chamada automática da query DAO isolado nesse arquivo de configuração
spl_autoload_register(function($class_name){
	
	$filename = $class_name.".php";

	if(file_exists(($filename))){
		require_once($filename);
	}

});

?>