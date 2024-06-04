<?php

    $salarioBase = 0;
    $horasExtras = 0;
    $valorHoraExtra = 0;

    function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra)
    {
        $valorHoraExtra = ($salarioBase / 160) * 1.5 * $horasExtras;
        $salarioFunc = $salarioBase + $valorHoraExtra;
        return $salarioFunc;
        echo $salarioFunc;
    }
    
    function listarFuncionarios($funcionarios)
    {
        foreach ($funcionarios as $conta => $detalhes){
            $valorHoraExtra = ($detalhes['horasExtras'] * 1.5) /160;
            echo "\n--------------------";
            echo "\nFúncionario: $conta";
            echo "\nSálario Base: R$" . $detalhes['salarioBase'] . "\n";
            echo "Horas Extas: " . $detalhes['horasExtras'] . " hrs\n";
            echo "Salário Total: R$" . calcularSalarioTotal($detalhes['salarioBase'], $detalhes['horasExtras'], $valorHoraExtra);
        }
    }

    $funcionarios = [
        'Pedro' => [
        'salarioBase' => 2500,
        'horasExtras' => 10
        ],
        'Renata' => [
        'salarioBase' => 3000,
        'horasExtras' => 5
        ],
        'Sérgio' => [
        'salarioBase' => 2000,
        'horasExtras' => 8
        ],
        'Vanessa' => [
        'salarioBase' => 3200,
        'horasExtras' => 5
        ],
        'André' => [
        'salarioBase' => 1700,
        'horasExtras' => 0
        ]
    ];

    echo listarFuncionarios($funcionarios);
    echo calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra);

?>