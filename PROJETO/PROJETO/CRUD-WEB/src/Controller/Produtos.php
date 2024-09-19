<?php

namespace App\Controller;

use PDO;
use App\ConexaoDB;

class Produtos
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = ConexaoDB::createConnection();
    }

    public function listar()
    {
        $produtos = $_SESSION['produtos'];
        require __DIR__ . "/../View/Produto/listar.php";
    }

    public function editar()
    {
        $id = $_GET['id'];
        $produtos = $_SESSION['produtos'];
        $produto = $produtos[$id];
        require __DIR__ . "/../View/Produto/editar.php";
    }

    public function criar()
    {
        require __DIR__ . "/../View/Produto/criar.php";
    }

    public function salvar()
    {
        $id = $_GET['id'] ?? 0;        
        $dados = $_POST;
    
        if ($id == 0) {
            $maiorId = 0;
            
            foreach ($_SESSION['produtos'] as $produto) {
                if ($maiorId < $produto['id']) {
                    $maiorId = $produto['id'];
                }
            }
            $id = $maiorId + 1;
        }
    
        $dados = [
            'id' => $id,
            'nome' => ($_POST['nome']),
            'sku' => ($_POST['sku']),
            'unidade_medida_id' => ($_POST['unidade_medida_id']),
            'valor' => ($_POST['valor']),
            'quantidade' => ($_POST['quantidade']),
            'categoria_id' => ($_POST['categoria_id'])
        ];
    
        $_SESSION['produtos'][$id] = $dados;
    
        header("Location: /produtos");
    }
    

    public function deletar()
    {
        $id = $_GET['id'];
        unset($_SESSION['produtos'][$id]);
        header("Location: /produtos");
    }
}

