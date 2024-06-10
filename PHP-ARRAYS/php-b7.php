<?php 

    $aprovados = 0;
    $reprovados = 0; 

    function calcularMedia($notas) 
    {
        $soma = array_sum($notas);
        $media = $soma / 5;
        if ($media >= 7) {
            echo "$media aprovado ";
        } else {
            echo "$media reprovado ";            
        }
    }

    $notasAlunos = [
        'Aluno 1' => [
        'notas' => [8.5, 6.0, 7.8, 9.2, 5.5]
        ],
        'Aluno 2' => [
        'notas' => [7.0, 8.0, 6.5, 7.5, 8.5]
        ],
        'Aluno 3' => [
        'notas' => [6.5, 7.5, 4.5, 5.5, 7.0]
        ], 
        'Aluno 4' => [
        'notas' => [5.0, 4.6, 7.8, 9.0, 6.0]
        ]
        ];

    
    echo "Resultado:\n";
    foreach ($notasAlunos as $aluno => $notas) {
        echo "$aluno: ";
        calcularMedia($notas['notas']);
        echo "\n";
        if (array_sum($notas['notas'])/5 > 7){
            $aprovados++;
        } else {
            $reprovados++;
        }
        
    }
    
    echo "O total de aprovados foi $aprovados \n";
    echo "O total de reprovados foi $reprovados \n";

?>
