<?php

/* Exemplo de combobox misturando o for no PHP alimentando a tag <select> no HTML */

echo "<select>";//Seletor HTML

//Oferecemos nesse 'for' decremental um select-option de todas as décadas da atual até o século passado
for ($i = date("Y"); $i >= date("Y")-100; $i -= 10) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';//Valor que alimenta a tag 'Select'

}

echo "</select>";
?>