<?php

$x = "bOm dIa";

echo $x;
// imprimi oq esta no X originalmente
echo '<br><br>';

$x = strtolower($x); // strtoupper() para maiuscula 
echo $x;
//passa todas as letras da variavel X para minusculo de forma definitiva
echo '<br><br>';

echo strtoupper($x);
// imprimi com todas a letras maiusculas 
echo '<br><br>';

echo strtolower($x);
// imprimi todas as letras do x minusculas 
echo '<br><br>';

echo ucwords($x);
// imprimi X com a primeira letra de CADA PALAVRA maiuscula
echo '<br><br>';

echo ucfirst($x);
// imprimi X com a primeira letra da string maiuscula
echo '<br><hr>';

$y = 'BOM DIA 2';
echo $y;
echo '<br><br>';
echo strtolower($y);
echo '<br><br>';
echo ucwords(strtolower($y));

echo '<br><br><hr>';
echo '<h2>Outros tipos</h2>';
echo '<hr><br><br>';

$z = "Bom dia";

echo $z;
echo '<br><br>';

echo str_replace('dia','NOITE',$z);
//troca a palavra 'dia' pela 'noite' na variavel $z

echo '<br><br>';
echo substr($z,3);
// corta a palavra da variavel z ate o index 3
echo '<br><br>';
echo strlen($z);
// imprimi a quantidade de caracteres que tem a palavra da variavel $z




?>