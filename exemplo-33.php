<?php

require("config.php");

//Recuperamos o diretório que contém os arquivos temporários "tmp"
echo session_save_path();
echo "<br><br />";

//Retorna o inteiro responsável pelo estado da nossa sessão
var_dump(session_status());
echo "<br><br />";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo "0 --> Sessão desabilitada"
		break;
	
	case PHP_SESSION_NONE:
		echo "1 --> Sessão habilitada porém inativa";
		break;

	case PHP_SESSION_ACTIVE:
		echo "2 --> Sessão habilitada e ativa";
		break;	
}

?>