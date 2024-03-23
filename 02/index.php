<?php 
    /// STRINGS

    // Para unir duas ou mais strings em PHP, usamos o operador de concatenação.
    $nome = "Paul";
    $sobrenome = "Willim";

    echo $nome. " ".$sobrenome; // Saída: Paul Willim

    //Para obter o comprimento de uma string em php, usamos a função strlen()
    $texto = "Olá , mundo!";
    echo strlen($texto); // Saída :12
    echo "<br>";

    // Para substituir partes de uma string, usamos a função str_replace()
    $texto = "O rato roeu a roupa do rei";
    $novo_texto = str_replace("rato", "gato", $texto);
    echo $novo_texto;
    echo "<br>";

    // strtolwer(): converte uma string para letras minúsculas
    // strtoupper(): converte uma string para letras maiúsculas
    $texto = "Olá, Mundo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);

    echo $texto_minusculo;
    echo "<br>";

    echo $texto_maiusculo;
    echo "<br>";

    echo $texto;
    echo "<br>";

    // trim(): Remove espaços em branco no inicio e no final de uma string.
    $texto = "Olá, Mundo!     ";
    $texto_sem_espacos = trim($texto); // Saída: Olá, Mundo!
    echo "<br>";

    // strpos(): Encontra a posição da primeira ocorrência de uma substring e uma string
    $texto = "O rato roeu a roupa do rei";
    $posicao = strpos($texto, "rato"); // Saída: 2 (posição da primeira letra da palavra "rato")

    echo $posicao;
    echo "<br>";

    // strrev(): Inverte uma string
    $texto = "Scorram-me subi no onibus em Marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido; // Saída: socorraM me subino on ibus em-marrocoS
?>