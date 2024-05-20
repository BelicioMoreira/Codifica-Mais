<?php 
    $saida = false;
    $num = 0;

    while ($saida == false) {
        echo "Digite um número (ou -1 para terminar: ";
        $num = trim(fgets(STDIN));
        $maiorNum = 0;

            if ($num < $maiorNum) {
                $num = $maiorNum;
                echo "$num";
            }

            if ($num == -1) {
                $saida = true;
                echo "exit";
            }
     }
?>