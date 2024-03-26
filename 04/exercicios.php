<?php
/*
    FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.
  
    Exercício 5 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
*/
 

//ex01
$altura = 1.78;
$peso = 75;

$v_atltura = $altura * $altura;

$imc = $peso / $v_atltura;

echo "Seu IMC é: $imc
";

if($imc < 18.5){
    echo "Você está abaixo do peso.\n <br><br>";
} elseif($imc >= 18.5 && $imc < 25){
    echo "Você está com peso normal.\n <br><br>";
} elseif($imc >= 25 && $imc < 30){
    echo "Você está com sobrepeso.\n <br><br>";
} else {
    echo "Você está obeso.\n < <br><br>";
}


// ex 02
$saldo_da_conta = 1000;
$usuario = true;
$valor_da_compra = 600;

$resumo_compra = $saldo_da_conta - $valor_da_compra;
echo "vc gastou 600 , seu saldo é : $resumo_compra. <br><br>";


//ex 03
$temperatura_celsius = 20.0;
$temperatura_fahrenheit = ($temperatura_celsius * 9 /5) + 32;
echo "A temperatura $temperatura_celsius º em Fahrenheit é: $temperatura_fahrenheit F <br><br>";




?>

