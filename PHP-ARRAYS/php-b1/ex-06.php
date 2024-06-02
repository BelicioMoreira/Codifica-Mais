<?php 

    echo "Escreva o 1º número: ";
    $num = trim(fgets(STDIN));
    $menorNum = $num;

    for ($i = 0; $i < 9; $i++){
        echo "Escreva o " . $i + 2 . "º número: ";
        $num = (int)trim(fgets(STDIN));
        if ($num < $menorNum){
            $menorNum = $num;
        }
    }

    echo "O menor número digitado foi: $menorNum"; 
    
?>