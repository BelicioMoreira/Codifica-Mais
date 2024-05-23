<?php 
    $num = 0;
    $maiorNum = $num;
    $menorNum = $num;
   

    while ($num != -1) {
        
        echo "Digite um número (ou -1) para terminar: ";
        $num = trim(fgets(STDIN));
        
        if ($num > $maiorNum) {
            $maiorNum = $num;
        }

        if ($menorNum < $maiorNum && $num != -1) {
            $menorNum = $num;
        }

        if ($num == -1 ) {
            break;
        }         
    }
     echo "O maior valor digitado foi: $maiorNum \n";
     echo "O menor valor digitado foi: $menorNum";
?>