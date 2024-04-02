<?php

function nomeDaFuncao() {
    // bloco  de código da função
}

// Declaração de função semm parâmetros e sem retorno
function saudacao() {
    echo "Olá, TII04! <br>";
}

saudacao(); // chamada da função

// Declaração de uma função que retorna um valor
function saudacao_retorno() {
    return "Olá, TII04% <br>";
}

echo saudacao_retorno();//chamdada de função de retorno

// Declaração de uma função que,recebe parâmetro
function saudacao_parametro($nome) {
    echo "Olá, $nome& <br>";
}

saudacao_parametro("TII04");// chamada de função de retorno

//Declaração de uma função que recebe um parâmetro e retorna algo
function saudacao_parametro_retorno($nome) {
    return"Olá, $nome* <br>";
}
echo saudacao_parametro_retorno("TII04");

// Declaração de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(8, 16);
echo "A soma de 8 com 16 é: $resultado  <br>";

#ESCOPO DA VARIÁVEIS!!!

$mensagem = "Olá"; // Varivel global

function mostrarMensagem() {
    $mensagem = "Mundo"; // Variável local
    echo $mensagem; // Saída: Mundo
}

mostrarMensagem();
echo $mensagem; // Saída: Olá

?>