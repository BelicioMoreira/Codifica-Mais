<?php  

class Menu
{

    public function exibirMenu()
    {
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
    }
    

    public function iniciarMenu()
    {

        $estoque = new Estoque();
        $estoque->adicionarProduto(new Produto('SKU-01', 'Nome Produto', 10, 'Un Medida', 10.20));
        $estoque->adicionarProduto(new ProdutoPerecivel('SKU-02', 'Nome Produto Perecivel', 10, 'Kg', 10.10, '10-30-23'));
        
        while (true) {

            $opcao = $this->exibirMenu();
            
            switch ($opcao) {
                case 1:
                    echo "Adicionar um produto\n";
                    $sku = readline("Digite o SKU do produto: ");
                    $nome = readline("Digite o Nome do produto: ");
                    $quantidade = readline("Digite a Quantidade: ");
                    $unidadeMedida = readline("Digite a unidade de medida: ");
                    $preco = readline("Digite o preço do produtor: ");
                    $novoProduto = new Produto($sku, $nome, $quantidade, $unidadeMedida, $preco);
                    $estoque->adicionarProduto($novoProduto);
                    break;
                case 2:
                    echo "Vender um produto\n";
                    $estoque->venderProduto();
                    break;
                case 3:
                    echo "Verificar Estoque\n";
                    //verificarEstoque($estoque, $codigo);
                    break;
                case 4:
                    echo "Listar o Estoque\n";
                    echo "-------------------------------------------------------------------------\n";
                    $estoque->listarEstoque();
                    break;
                case 5:
                    echo "Saindo...\n";
                    exit;
                default:
                    echo "Opção inválida, por favor tente novamente.\n";
                    break;
            }
        }
    }
}