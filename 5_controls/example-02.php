<?php

/* Estrutura básica de Switch-case no PHP */

$diaDaSemana = date("w");// retorna o dia numericamente,ex: Sunday = 1

switch ($diaDaSemana) {

	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Segunda-feira";
	break;

	case 2:
	echo "Terça-feira";
	break;

	case 3:
	echo "Quarta-feira";
	break;

	case 4:
	echo "Quinta-feira";
	break;

	case 5:
	echo "Sexta-feira";
	break;

	case 6:
	echo "Sábado";
	break;

	default://Padrão caso nenhum case seja atendido
	echo "Dia da semana inexistente!";
}

?>