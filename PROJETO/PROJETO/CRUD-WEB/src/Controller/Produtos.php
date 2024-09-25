<?php

namespace App\Controller;

use PDO;
use App\Controller\ConexaoDB;
use mysqli;

class Produtos
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = ConexaoBD::createConnection();
    }

    public function listar()
    {
        $sql = "SELECT * FROM produto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $produtos = $stmt->fetchAll();
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
        $sql = "INSERT INTO produtos (sku, nome, categoria_id, quantidade, valor, unidade_medida_id) VALUES (:sku, :nome, :categoria_id, :quantidade, :valor, :unidade_medida_id)";

        // Quando você usa prepare(), você separa a lógica SQL dos dados. Isso garante que os dados sejam tratados de forma segura
        $stmt = $this->connection->prepare($sql);

        // Ao usar filter_input(), você reduz o risco de injeção de SQL e garante que os dados são válidos antes de tentar processá-los.
        // FILTER_SANITIZE_STRING - remove caracteres especiais de uma string, como <, >, ", ', etc., que poderiam ser utilizados para injeção de código malicioso

        $sku = filter_input(INPUT_POST, 'sku', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $categoria_id = filter_input(INPUT_POST, 'categoria_id', FILTER_VALIDATE_INT);
        // Garantir que os dados são válidos antes de tentar executar
        if (!$sku || !$nome || !$categoria_id || !$quantidade || !$valor || !$unidade_medida_id) {
            throw new InvalidArgumentException("Dados inválidos fornecidos.");
        }

        try {
            $stmt->execute([
                ':sku' => $sku,
                ':nome' => $nome,
                ':categoria_id' => $categoria_id,
                ':quantidade' => $quantidade,
                ':valor' => $valor,
                ':unidade_medida_id' => $unidade_medida_id,
            ]);
        } catch (PDOException $e) {
            error_log("Erro de banco de dados: " . $e->getMessage());
            echo "Erro ao atualizar o produto.";
        }

        header('Location: /produtos');
    }
    

    public function deletar()
    {
        $id = $_GET['id'];
        unset($_SESSION['produtos'][$id]);
        header("Location: /produtos");
    }
}

