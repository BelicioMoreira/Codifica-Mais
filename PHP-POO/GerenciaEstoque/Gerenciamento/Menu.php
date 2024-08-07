<?php  

namespace Gerenciamento;

use Gerenciamento\Estoque;

class Menu
{
    public function exibirMenu()
    {
        {
            echo "\n";
            echo "Escolha uma das opções abaixo:\n";
            echo "1. Adicionar um Produto\n";
            echo "2. Adicionar um Produto Perecível\n";
            echo "3. Vender um Produto\n";
            echo "4. Verificar Estoque\n";
            echo "5. Listar o Estoque\n";
            echo "6. Sair\n";
            $opcao = readline("Digite a sua escolha: ");
            return $opcao;
        }
    }

    public function iniciarMenu()
    {
        $estoque = new Estoque();
        
        while (true) {

            $opcao = $this->exibirMenu();
            
            switch ($opcao) {
                case 1:
                    echo "--------------------------\n";
                    echo "Adicionar um produto\n";
                    echo "--------------------------\n";
                    $estoque->adicionarProduto();
                    break;
                case 2:
                    echo "--------------------------\n";
                    echo "Adicionar um produto\n";
                    echo "--------------------------\n";
                    $estoque->adicionarProdutoPerecivel();
                    break;
                case 3:
                    echo "--------------------------\n";
                    echo "Vender um produto\n";
                    echo "--------------------------\n";
                    $estoque->venderProduto();
                    break;
                case 4:
                    echo "--------------------------\n";
                    echo "Verificar Estoque\n";
                    echo "--------------------------\n";
                    $estoque->verificarEstoque();
                    break;
                case 5:
                    echo "--------------------------\n";
                    echo "Listar o Estoque\n";
                    echo "-------------------------------------------------------------------------\n";
                    $estoque->listarEstoque();
                    break;
                case 6:
                    echo "--------------------------\n";
                    echo "Saindo...\n";
                    echo "--------------------------\n";
                    exit;
                default:
                    echo "--------------------------\n";
                    echo "Opção inválida, por favor tente novamente.\n";
                    echo "--------------------------\n";
                    break;
            }
        }
    }
}