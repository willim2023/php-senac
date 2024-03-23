<?php
// NÚMEROS E OPERADORES

// Operações Básicas
$num1 = 10;
$num2 = 5;
echo "Valor A = $num1 e valor B = $num2 <br>";

// soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

// Subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

// multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação: $multiplicacao <br>";

// Divisao
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br>";

// modulo (resto da divisão)
$modulo = $num1 % $num2;
echo "Módulo: $modulo <br>";

// Operações de incremento e decremento
$num = 5;
echo "Valor base para incremento e decremento = $num <br>";

// incremento
$num1 ++;
echo "Incremento: $num <br>";

// Decremento
$num1 --;
echo "Decremento: $num <br>";

// Operadores de comparação
$num1 = 10;
$num2 = 5;

// Igualdade
echo "Igual a: ";
echo $num1 == $num2 ? "Verdadeiro" : "Falso";

// Diferente
echo "Diferente de: ";
echo $num1 != $num2? "Verdadeiro <br>" : "Falso <br>";

// Maior que 
echo "Maior que: ";
echo $num1 > $num2 ? "Veradeiro <br>" : "Falso <br>";

// Menor que
echo "Menor que: ";
echo $num1 < $num2 ? "Verdadeiro <br>" : "Falso <br>";

// Operadores Lógicos
$estaChovendo = true;
$estaCalor = true;

// E lógico (AND)
echo "Verdadeiro e Verdadeiro: ";
echo true && true ? "Verdadeiro <br>" : "Falso <br>";

echo "Verdadeiro e Falso: ";
echo true && false ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso e Verdadeiro: ";
echo false && true ? "Verdadeiro <br> " : "Falso <br>";

echo "Falso e Falso: ";
echo false && false ? "Verdadeiro <br> " : "Falso <br>";

// Ou lógico (OR)
echo "Verdadeiro ou Verdadeiro: ";
echo true || true ? "Verdadeiro <br> " : "Falso <br>";

echo "Verdadeiro ou Falso: ";
echo true || false ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso ou Verdadeiro: ";
echo false || true ? "Verdadeiro <br>" : "Falso <br>";

echo "Falso ou Falso: ";
echo false || false ? "Verdadeiro <br>" : "Falso <br>";

// Não lógico (NOT)
echo "Negando algo que é verdadeiro: ";
echo !true ? "Verdadeiro <br>" : "False <br>";

?>