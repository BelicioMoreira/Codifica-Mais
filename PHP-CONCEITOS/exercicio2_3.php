<?php 
    echo "Digite o 1° número: ";
    $numA = 1;

    echo "Digite o 2° número: ";
    $numB = 9;

    $soma = 0

    if ($numA < $numB) {
        for ($i = $numA; $i <= $numB; $i++) {
            echo "$i";
            if ($i % 2 = 1) {
                $i = $i++
                echo "$i";
            }
        }
    } else {
        echo "O número $numA não é maior que $numB, por favor digite outros valores.";
    }

?>