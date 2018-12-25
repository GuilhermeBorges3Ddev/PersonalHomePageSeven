<?php

//Diferenciando aspas simples das duplas
$nome = "Hcode";//Com aspas duplas temos a vantagem de concatenar texto e variáveis automaticamente
$nome2 = 'Treinamentos';//Aspas simples não concatena sozinha, ela imprime o nome ao invés do conteúdo
var_dump($nome, $nome2);//Ambas são mostradas como strings de aspas duplas
echo "<br/>";

echo "ABC $nome";//Exemplo de concatenação texto com variável inline, interpola variáveis
echo "<br/>";
echo 'ABC $nome';

