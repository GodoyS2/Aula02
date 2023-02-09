<?php

echo "<h1>PHP - Aula 02</h1> <br>";
echo "<h2>Tipos de dados </h2>";
echo "<br>";

#http://localhost/Godoy/aula02/ - site

$nome = "Godoy";
$idade = 18;
$altura = 1.68;
$fumante = false;

echo "<hr>";

echo "Nome: " . $nome;
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
echo "Altura: " . $altura;
echo "<br>";
echo "Fumante: " . $fumante;

echo "<hr>";

echo gettype($nome);

echo "<h2> operadores aritéticos</h2>";

echo "<strong>Adição</strong><br>";
echo "<strong>Subtração</strong><br>";
echo "<strong>Multiplicação</strong><br>";
echo "<strong>Divisão</strong><br>";
echo "<strong>Resto da divisão</strong><br>";
echo "<strong>Exponenciação</strong>";

$n1 = 10;
$n2 = 2;

echo "<br>";
echo "<br>";

echo $n1 + $n2 . "<br>";
echo $n1 - $n2 . "<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % $n2 . "<br>";
echo $n1 ** $n2 . "<br>";

echo "<h2>Operadores relacionais</h2>";

echo ($n1 > $n2) . "<br>";
echo ($n1 < $n2) . "<br>";
echo ($n1 >= $n2) . "<br>";
echo ($n1 <= $n2) . "<br>";
echo ($n1 =! $n2) . "<br>";
echo ($n1 == $n2) . "<br>";

echo "<h2>Operadores lógicos</h2>";

echo (20 > 10) && (10 > 5);
echo  " <br>";
echo (20 > 10) || (10 > 5);