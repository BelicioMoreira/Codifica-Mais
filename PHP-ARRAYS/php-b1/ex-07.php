<?php 

    function calcularTabela($num)
    {
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $i * $num;
            echo "$i" . " x " . "$num = " . "$resultado\n";
        }
    }

    echo "Digite um número para saber a sua tabela de multiplicação: ";
    $num = (int)trim(fgets(STDIN));
    echo calcularTabela($num);

?>