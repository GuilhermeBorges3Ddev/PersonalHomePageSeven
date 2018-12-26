<?php

echo "<select>";//Seletor HTML

//Oferecemos nesse 'for' decremental um select-option de todas as décadas da atual até 1918
for ($i = date("Y"); $i >= date("Y")-100; $i -= 10) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';//Valor que alimenta a tag 'Select'

}

echo "</select>";
?>