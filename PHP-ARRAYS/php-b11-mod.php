<?php 

    $estoque = [
        [
        'sku' => 'GRA-001',
        'nome' => 'Arroz 5kg',
        'unidade_medida' => '5kg',
        'quantidade' => 50,
        'preco' => 37.95
        ],
        [
        'sku' => 'GRA-002',
        'nome' => 'Feijão Preto 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 30,
        'preco' => 8.99
        ],
        [
        'sku' => 'MAS-003',
        'nome' => 'Macarrão Espaguete 500g',
        'unidade_medida' => '500g',
        'quantidade' => 100,
        'preco' => 9.99
        ],
        [
        'sku' => 'MAN-004',
        'nome' => 'Óleo de Soja 900ml',
        'unidade_medida' => '900ml',
        'quantidade' => 60,
        'preco' => 6.98
        ],
        [
        'sku' => 'GRA-005',
        'nome' => 'Açúcar Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 80,
        'preco' => 4.98
        ],
        [
        'sku' => 'GRA-006',
        'nome' => 'Sal Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 40,
        'preco' => 4.5
        ],
        [
        'sku' => 'GRA-007',
        'nome' => 'Café Torrado e Moído 500g',
        'unidade_medida' => '500g',
        'quantidade' => 20,
        'preco' => 16.98
        ],
        [
        'sku' => 'BEB-008',
        'nome' => 'Leite UHT Integral 1L',
        'unidade_medida' => '1L',
        'quantidade' => 70,
        'preco' => 6.99
        ],
        [
        'sku' => 'GRA-009',
        'nome' => 'Farinha de Trigo 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 90,
        'preco' => 5.45
        ],
        [
        'sku' => 'PRO-010',
        'nome' => 'Molho de Tomate',
        'unidade_medida' => '340g',
        'quantidade' => 50,
        'preco' => 3.99
        ]
        ];

    // Implemente aqui o código
    function adicionarProduto(&$estoque, $novoEstoque, $sku, $nome, $unidade_medida, $preco, $quantidade)
    {
        $novoEstoque = [
            [
                'sku' => $sku,
                'nome' => $nome,
                'unidade_medida' => $unidade_medida,
                'quantidade' => $quantidade,
                'preco' => $preco                
            ]
            ];
            
        $estoque = array_merge($estoque, $novoEstoque);
        var_dump($estoque);
    }

    function venderProduto()
    {

    }    

    function verificarEstoque() 
    {

    }

    function listarEstoque()
    {

    }

    function deletarProduto($estoque)
    {
        $skuProcurado = readline("Digite o SKU do produto: ");
        $key = array_search($skuProcurado, array_column($estoque, 'sku'));

        var_dump($key);
        unset($estoque[$key]);
        var_dump($estoque);
    }

    // Função para exibir o menu e obter a escolha do usuário
    function exibirMenu()
    {
        echo "\n";
        echo "Escolha uma das opções abaixo:\n";
        echo "1. Adicionar um produto 1\n";
        echo "2. Vender um produto 2\n";
        echo "3. Verificar Estoque 3\n";
        echo "4. Listar o Estoque 4\n";
        echo "5. Deletar produto 5\n";
        echo "6. Sair\n";
        $opcao = readline("Digite a sua escolha: ");
        return $opcao;
    }

    while (true) {

        $opcao = exibirMenu();

        switch ($opcao) {
            case 1:
                echo "Adicionar um produto\n";
                $sku = readline("Digite o Código do produto: ");
                $nome = readline("Digite o Nome do produto: ");
                $unidade_medida = readline("Digite a unidade de medida: ");
                $quantidade = readline("Digite a quantidade: ");
                $preco = readline("Digite a preço: ");
                adicionarProduto($estoque, $novoEstoque, $sku, $nome, $unidade_medida, $preco, $quantidade);
                break;
            case 2:
                echo "Vender um produto\n";
                // Implemente aqui o código para a opção 2
                venderProduto($estoque, $sku, $quantidade);
                break;
            case 3:
                echo "Verificar Estoque\n";
                // Implemente aqui o código para a opção 3
                verificarEstoque($estoque, $sku);
                break;
            case 4:
                echo "Listar o Estoque\n";
                // Implemente aqui o código para a opção 4
                listarEstoque($estoque);
                break;
            case 5:
                echo "Deletar produto\n";
                deletarProduto($estoque);
                break;
            case 6:
                echo "Saindo...\n";
                exit; // Sai do loop e encerra o script
            default:
                echo "Opção inválida, por favor tente novamente.\n";
                break;
        }
    }

?>