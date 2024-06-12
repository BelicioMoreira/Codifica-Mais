<?php 

    $estoque = [];

    // Implemente aqui o código
    function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade)
    {
        $estoque[] = [
            'codigo' => $codigo,
            'nome' => $nome,
            'tamanho' => $tamanho,
            'cor' => $cor,
            'quantidade' => $quantidade
        ];
    }

    function venderProduto(&$estoque, $codigo, $quantidade)
    {
        $codigo = readline("Digite o código do produto: ");
        foreach ($estoque as $key => $produto) {
            if ($produto['codigo'] == $codigo) {
                $quantidade = readline("Digite a quantidade: ");
                $produto['quantidade'] -= $quantidade;
                echo "-------------------------------------------------------------------------\n";
                echo "Foi vendido $quantidade unidades do produto {$produto['nome']}.\n";
                echo "-------------------------------------------------------------------------";
            } else {
                echo "-------------------------------------------------------------------------\n";
                echo "Produto não encontrado.\n";
                echo "-------------------------------------------------------------------------";
            }

            if ($quantidade > $produto['quantidade']) {
                echo "-------------------------------------------------------------------------\n";
                echo "Existem apenas {$produto['quantidade']} deste produto\n";
                echo "-------------------------------------------------------------------------";
            }

            if ($produto['quantidade'] == 0) { 
                unset($estoque[$key]);
                echo "-------------------------------------------------------------------------\n";
                echo "O produto  {$produto['nome']} foi removido, pois acabou o estoque. ". "\n";
                echo "-------------------------------------------------------------------------";
            }
        }
        //var_dump($estoque);
    }

    function listarEstoque($estoque)
    {
        if(empty($estoque)){
            echo "Estoque vazio!\n";
            return;
        }
        foreach ($estoque as $produto) {
            echo "Código: {$produto['codigo']} Nome: {$produto['nome']} Tamanho: {$produto['tamanho']} Cor: {$produto['cor']} Quantidade: {$produto['quantidade']} \n";
            echo "-------------------------------------------------------------------------\n";
        }
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
        echo "5. Sair\n";
        $opcao = readline("Digite a sua escolha: ");
        return $opcao;
    }

    while (true) {

        $opcao = exibirMenu();

        switch ($opcao) {
            case 1:
                echo "Adicionar um produto\n";
                $codigo = readline("Digite o Código do produto: ");
                $nome = readline("Digite o Nome do produto: ");
                $tamanho = readline("Digite o Tamanho: ");
                $cor = readline("Digite a Cor: ");
                $quantidade = readline("Digite a Quantidade: ");
                adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
                break;
            case 2:
                echo "Vender um produto\n";
                echo venderProduto($estoque, $codigo, $quantidade);
                // Implemente aqui o código para a opção 2
                break;
            case 3:
                echo "Verificar Estoque\n";
                // Implemente aqui o código para a opção 3
                break;
            case 4:
                echo "Listar o Estoque\n";
                echo "-------------------------------------------------------------------------\n";
                echo listarEstoque($estoque);
                // Implemente aqui o código para a opção 4
                break;
            case 5:
                echo "Saindo...\n";
                exit; // Sai do loop e encerra o script
            default:
                echo "Opção inválida, por favor tente novamente.\n";
                break;
        }
    }

?>