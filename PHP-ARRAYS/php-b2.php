<?php 

    echo "Digite o valor da conta: ";
    $conta = trim(fgets(STDIN));

    echo "Digite a porcentagem da gorjeta: ";
    $gorjeta = trim(fgets(STDIN));

    $porcentagem = $gorjeta / 100;

    echo "● Valor da conta: R$$conta" . PHP_EOL;
    echo "● Porcentagem da gorjeta: " . $gorjeta . "% \n";
    echo "● Valor da gorjeta: R$" . $conta * $porcentagem . PHP_EOL;
    echo "● Valor total a ser pago: R$" . $conta + ($conta * $porcentagem) . PHP_EOL;

?>