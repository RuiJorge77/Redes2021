<?php
$nome="Funções de manipulaçao de strings no PHPs";
$nome_maisculo= strtoupper($nome);
echo $nome_maisculo;

$nome = "Funções de manipulação de strings no PHPs";
$nome_minusculo = strtolower($nome);
echo $nome_minuscolo;

$nome = "Funções de manipulação de strings no PHPs";
$parte = substr($nome, 8);
echo $parte;

$repetido = str_repeat("0", 5);
echo $repetido;

$qtd_char = strlen("linha de codigo");
echo $qtd_char;

$texto = "ola, mundo.";
$novo_texsto = str_replace("mundo", "leitor", $texto);
echo $novo_texto;


$texto = "bem vindo ao linha de codigo!";
$pos = strpos($texto, "codio");
echo $pos;