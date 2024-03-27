<?php
/*
    Exercício 1 - Acesso a Elementos:
    Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.

    Exercício 2 - Alteração de Elementos:
    Crie um array contendo os meses do ano. Altere o valor do último elemento para "Dezembro".

    Exercício 3 - Adição de Elementos:
    Crie um array vazio. Adicione os números de 1 a 5 ao array. Depois, adicione o número 6 ao final do array.

    Exercício 4 - Percorrendo um Array:
    Crie um array contendo os nomes dos meses do ano. Utilize um loop foreach para exibir todos os meses.

    Exercício 5 - Contagem de Elementos:
    Crie um array contendo os dias da semana. Conte quantos elementos o array possui e exiba o resultado.

    Exercício 6 - Busca de Elemento:
    Crie um array contendo os dias da semana. Utilize a função array_search() para encontrar a posição do dia "Sábado" no array e exiba o resultado.

    Exercício 7 - Reversão de Array:
    Crie um array contendo os números de 1 a 10. Inverta a ordem dos elementos do array e exiba o resultado.
*/

# 1
$dias_da_semana = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];
echo "O terceiro dia da semana é: " . $dias_da_semana[2] . "<br>";

# 2
$meses_do_ano = ["jan", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set","out", "nov", "dez"];
$meses_do_ano[count($meses_do_ano) - 1] = "Dezembro";
echo "Último mês do ano alterado para: " . end($meses_do_ano) . "<br>";

# 3
$array_numeros = [];
for($i = 1; $i <= 5; $i++) {
    $array_numeros[] = $i;
}
$array_numeros[] = 6;
echo "Array de números: ";
print_r($array_numeros);
echo "<br>";

# 4
$meses = ["jan", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set","out", "nov", "dez"];
echo "Meses do ano: ";
foreach($meses as $mes) {
    echo $mes . " ";
}
echo "<br>";

# 5
echo "O total de dias da semana é: " . count($dias_da_semana) . "<br>";

# 6
echo "O sábado está na posição: " . array_search("Sábado", $dias_da_semana) . "<br>";

# 7 Solução Normal
$numeros_de_1_a_10 = range(1, 10);
$numeros_de_1_a_10_reverso = array_reverse($numeros_de_1_a_10);
echo "Numeros revertidos: ";
print_r($numeros_de_1_a_10_reverso);
echo "<br>";

# 8 Solução Walther
echo "Solução Walther: ";
print_r(array_reverse(range(1, 10)));