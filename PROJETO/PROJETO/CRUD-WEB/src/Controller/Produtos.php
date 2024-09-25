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
        $sql = "UPDATE produto SET 
        nome = :nome, 
        sku = :sku, 
        unidade_medida_id = :unidade_medida_id, 
        valor = :valor, 
        quantidade = :quantidade, 
        categoria_id = :categoria_id 
        WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'nome'=>$_POST['nome'], 
            'sku'=>$_POST['sku'], 
            'unidade_medida_id'=>$_POST['unidade_medida_id'], 
            'valor'=>$_POST['valor'], 
            'quantidade'=>$_POST['quantidade'], 
            'categoria_id'=>$_POST['categoria_id'], 
            'id'=>$_GET['id']
        ]);
        
        return true;
        require __DIR__ . "/../View/Produto/editar.php";
    }

    public function criar()
    {
        require __DIR__ . "/../View/Produto/criar.php";
    }

    public function salvar()
    {
        $sql = "INSERT INTO produtos (sku, nome, categoria_id, quantidade, valor, unidade_medida_id) VALUES (:sku, :nome, :categoria_id, :quantidade, :valor, :unidade_medida_id)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':sku' => $_POST['sku'],
            ':nome' => $_POST['sku'],
            ':categoria_id' => $_POST['categoria_id'],
            ':quantidade' => $_POST['quantidade'],
            ':valor' => $_POST['valor'],
            ':unidade_medida_id' => $_POST['unidade_medida_id'],
        ]);

        header('Location: /produtos');
    }
    

    public function deletar()
    {
        $sql = "DELETE FROM produto WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id'=>$_GET['id']]);
        return true;
    }
}

