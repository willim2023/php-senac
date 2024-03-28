<?php
/// ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR
echo "Exemplo 1: FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Número $i <br>";
}
echo "<br>";

// Exemplo 2: while
echo "Exemplo 2: while <br>";

$contador = 1;

while ($contador <= 5) {
    echo "Numero $contador <br>";
    $contador++;
}

// Exemplo 3: DO-WHILE
echo "Exemplo 3: DO-WHILE <br>";
$cont_do = 1;
do {
    echo "Número: $cont_do <br>";
    $cont_do++;
} while ($cont_do <= 5);
echo "<br>";

// Exemplo 4: FOREACH
echo "Exemplo 4: FOREACH <br>";
$array_vogais = ["a", "e", "i", "o", "u"];
foreach ($array_vogais as $vogal) {
    echo "Vogal: $vogal <br>";
}
echo "<br>";

// Exemplo 5: BREAK e CONTINUE
echo "Exemplo 5: BREAK E CONTINUE <br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue;
        break;
    }

    echo "Número $i <br>";
}
