<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; //Número fornecido pelo usuário.
echo "Contagem Regressiva <br>";

// Solução com for
for($i = $numero; $i >= 0; $i--) {
    echo "Faltam $i segundos <br>";
}

// Solução com while
$i = $numero;
while($i >= 0) {
    echo "Faltam $i segundos <br>";
    $i--;
}

// Solução com do-while
$i = $numero;
do {
    echo "Faltam $i segundos <br>";
    $i--;
} while($i >= 0);
echo "<br>";
// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

$tabuada_numero = 8;

// Solução com o FOR
for($i = 1; $i <= 10; $i++) {
    $resultado = $tabuada_numero * $i;
    echo "$tabuada_numero X $i = $resultado <br>";
}
echo "<br>";

// Solução com while
$i = 1;
while($i <= 10) {
    $resultado = $tabuada_numero * $i;
    echo "$tabuada_numero X $i = $resultado <br>";
    $i++;
}
echo "<br>";

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

// Solução com for
echo "Solução com o FOR: <br>";

$anterior = 0;
$atual = 1;
$termos = 13;

echo "$anterior $atual ";
for($i = 2; $i < $termos; $i++) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
}
echo "<br>";

// Solução com while
echo "Solução com o WHILE: <br>";
$i = 2;
$anterior = 0;
$atual = 1;

echo "$anterior $atual ";
while ($i < $termos) {
    $proximo = $anterior + $atual;
    echo "$proximo ";
    $anterior = $atual;
    $atual = $proximo;
    $i++;
}
?>