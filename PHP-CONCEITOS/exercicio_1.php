<?php
    echo "Digite o 1° número: ";
    $num1 = trim(fgets(STDIN));

    echo "Digite o 2° número: ";
    $num2 = trim(fgets(STDIN));

    $soma = $num1 + $num2;
    
    echo "A soma dos 2 números foi $soma";
?>