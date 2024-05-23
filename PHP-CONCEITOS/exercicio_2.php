<?php 
    echo "Digite a 1° nota: ";
    $nota1 = trim(fgets(STDIN));

    echo "Digite a 2° nota: ";
    $nota2 = trim(fgets(STDIN));

    echo "Digite a 2° nota: ";
    $nota3 = trim(fgets(STDIN));

    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    echo "A média das notas foram $media";
?>