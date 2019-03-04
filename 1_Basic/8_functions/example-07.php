<?php

/* Neste exemplo usaremos recursão pra representar um organograma html+php */

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//Início: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					//Início: Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				) 
			),
			//Termino: Diretor Comercial
			array(
			//Início: Diretor Financeiro
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
				 //Início: Gerente de Contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
						 //Inicio: Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor'
							)
						 //Término: Supervisor de Pagamentos	
						)
					),
				 //Término: Gerente de Contas a pagar
				 //Inicio: Gerente de Compras
				 array(
				 	'nome_cargo' => 'Gerente de Compras',
				 	'subordinados' => array(
				 	//Inicio: Supervisor de Suprimentos	
				 		array(
				 			'nome_cargo' => 'Supervisor de Suprimentos',
				 			'subordinados' => array(
				 				array(
				 				'nome_cargo' => 'Funcionario'
				 				)
				 			)
				 		)
				 	//Término: Supervisor de Suprimentos	
				 	)
				 )
				 //Término: Supervisor de Pagamentos	
				) 
			)
			//Término: Diretor Financeiro
		)
	),
);

function exibe($cargos){

	$html = '<ul>';//Cria lista não ordenada

	foreach ($cargos as $cargo) {//Para cada $cargo dentro da $hierarquia, faça...

		$html .= "<li>";//Concatenação como item desta <ul>, símbolo '*'

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados'])){

			$html .= exibe($cargo['subordinados']);//Se houver subordinado de um cargo chama recursão

		}

		$html .= "</li>";
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);//Imprime a hierarquia de cargos pela função exibe

?>