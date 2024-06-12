<?php 

    function calculoArea ($altura, $largura)
    {
        $area = $altura * $largura;
        return $area;
    }

    function calculoPerimetro($altura, $largura)
    {
        $perimetro = 2 * ($altura + $largura);
        return $perimetro;
    }

    echo "Digite a largura do retângulo: ";
    $largura = trim(fgets(STDIN));
    echo "Digite a altura do retângulo: ";
    $altura = trim(fgets(STDIN));

    echo "● Largura: $largura metros \n";
    echo "● Altura: $altura metros \n";
    echo "● Área: " . calculoArea($altura, $largura) . " m² \n";
    echo "● Perímetro: ". calculoPerimetro($altura, $largura) ." metros";

?>