	
	<!-- $_GET combinado com foreach para pegarmos cada valor e nome do campo no <form>-->

	<form><!-- Como não tem padrão de 'action' para o form o padrão será GET-->

		<input type="text" name="nome">
		<input type="date" name="nascimento">
		<input type="submit" value="OK">

	</form>

	<?php

	if(isset($_GET)){
		//$key irá pegar o 'name' do devido input
		//$value irá pegar o 'valor' preenchido no input
		foreach ($_GET as $key => $value) {
		
			echo "Nome do campo: " .$key."<br />" ;
			echo "Valor do campo: " .$value."<br />" ;
			echo "<hr>";
		}
	}

	?>