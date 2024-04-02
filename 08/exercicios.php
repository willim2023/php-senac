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
echo "<br><br>";

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
// Implementação da Verificação de Soma

$A = 5;
$B = 10;
$C = 15;
if($A + $B == $C) {
    echo "A soma de A e B é Igual a C <br>";
} else {
    echo "A soma de A e B não é igual a C <br>";
}
# OU
echo $A + $B == $C ? "A soma de A e B é Igual a C <br>" : "A soma de A e B não é igual a C <br>";

// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;
// Implementação do Cálculo do Quadrado

$quadrado = $numero * $numero;
echo "O quadrado de $numero é $quadrado <br>";
echo "<br>";


// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/

// Implementação da Verificação de Paridade
echo "Digite um número inteiro: ";
$n1 = 32;

// Verifica se o número é par ou ímpar
if ($n1 % 2 == 0) {
    echo "O número " . $n1 . " é par.";
} else {
    echo "O número " . $n1 . " é ímpar.";
}
echo "<br>";

// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$num1 = 7;
$num2 = 5;
$num3 = 10;

// Implementação do Cálculo da Média
$media = ($num1 + $num2 + $num3) / 3;
echo "A média dos três números é:   $media . <br>";

// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo
if($numeroMultiplo % $multiploDe == 0) {
    echo "$numeroMultiplo é múltiplo de $multiploDe";
} else {
    echo "$numeroMultiplo não é multiplo de $multiploDe";
}
echo "<br>";

//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/
$numeroN = 1;
$numeroM = 25;

// Implementação de Números Primos em um Intervalo
function ehprimo($numero){
    // verifica se o número é menor ou igual a 1
    if($numero <= 1) {
      return false;
    }

    // verifica se o número é divisivel por algum número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if($numero % $i == 0) {
            return false; // se for divisivel, não é primo
        }
    }
    return true; // se não for divisivel, é primo
}

echo "Números primos os intervalos de $numeroN até $numeroM. ";
for ($i = $numero; $i <= $numeroN; $i++) {
    if(ehprimo($i)) {
        echo "$i"; // Adiciona o número a lista dos primos se for um número primo
    }
} echo "<br>";


//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos
$horas = explode(":", $horas_string);
$totalMinutos = $horas[0] * 60 + $horas[1];

echo "O equivalente total em minutos de $horas_string é: $totalMinutos <br>";
echo "<br>";


/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;
// Implementação de Desenho de Pirâmide

for($i = 1; $i <= $altura_piramide; $i++) {
    echo str_repeat("* ", $i) . "<br>";
}
echo "<br>";
# ou 
for($i = 1; $i <= $altura_piramide; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número
echo "O número de digitos em $numeroDigitos é: " . strlen($numeroDigitos) . "<br>";



//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";
$palavraInvertida = strrev($palavra);

// Implementação de Verificação de Palíndromo
if($palavra == $palavraInvertida) {
    echo "A palavra $palavra é um palíndromo. <br>";
} else {
    echo "A palavra $palavra não é um palíndromo. <br>";
}

//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;

// Implementação de Ordenação de Números
$numeros = [$numero1, $numero2, $numero3];
sort($numeros);

echo "Números em ordem crescente: ";
foreach($numeros as $numero) {
    echo "$numero ";
}
echo "<br>";

//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;
// Implementação de Soma de Dígitos
$numero_string_array = str_split($numeroSoma); // separa os números como um array de string
$somaDosDigitos = array_sum($numero_string_array); // soma os valores contidos no array

echo "A soma dos digitos de $numeroSoma é: $somaDosDigitos. <br>";
//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica


?>
