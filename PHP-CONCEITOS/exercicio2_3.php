<?php 

echo "Digite o 1° número: ";
$numA = trim(fgets(STDIN));

echo "Digite o 2° número: ";
$numB = trim(fgets(STDIN));

$soma = 0;

if ($numA < $numB) {
    for ($i = $numA; $i <= $numB; $i++) {

        if ($i % 2 == 1) {
            $soma = $i + $soma;
        }
    }
} else {
    echo "O número $numA não é maior que $numB, por favor digite outros valores.";
}

echo "A soma dos números impares entre $numA e $numB é $soma";
?>