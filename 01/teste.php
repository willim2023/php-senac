<?php

    echo "Olá Mundo!";

    // Isso é um comentario
    
    # Isso tambem é um comentario

    /*
    Isso é um comentario de múltiplas linhas 
    Eu disse, multiplas linhas
    */
    
    //Declaração de variaveis
    $nome = "João";
    $sobrenome = "Silva";
    $nome_completo = $nome . "". $sobrenome;

    //echo $nome;
    //echo $sobrenome;  
    echo $nome ." ". $sobrenome . "<br>";
    echo $nome_completo . "<br>";

    // Variaveis númericas
    $idade = 25;
    $ano = 2024;

    echo $idade . "<br>";
    echo $ano - $idade; // operações matematicas

    echo 'Esse é um texto em aspas simples <br>';
    echo "Esse é um texto em aspas duplas <br>";
    
    // Trabalhando com aspas simples e duplas
    echo 'Dom Pedro disse: "Independencia ou Morte!" <br>';

    echo "$nome tem $idade anos de idade <br>";
    echo '$nome tem $idade anos de idade';

    // Testando o case sensitive - palavras reservadas
    echo "Texto 1 <br>";
    ECHO "Texto 2 <br>";

    // Testando o case sensitive - variaveis
    $primeiroNome = "Carlos";

    echo $primeiroNome;
    ECHO $PRIMEIRONOME;
?>
