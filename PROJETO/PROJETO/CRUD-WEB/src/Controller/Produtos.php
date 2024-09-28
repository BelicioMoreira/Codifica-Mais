<?php

namespace App\Controller;

use PDO;
use App\Controller\ConexaoDB;
use mysqli;
use PDOException;

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

    public function getID()
    {
        $sql = "SELECT
        id,
        nome,
        sku,
        unidade_medida_id,
        valor,
        quantidade,
        categoria_id
        FROM produto
        WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id'=>$_GET['id']]);
        $getID = $stmt->fetch(PDO::FETCH_ASSOC);
        return $getID;
    }

    public function editar()
    {
        $produto = $this->getID();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "UPDATE produto SET 
        nome = :nome, 
        sku = :sku, 
        unidade_medida_id = :unidade_medida_id, 
        valor = :valor, 
        quantidade = :quantidade, 
        categoria_id = :categoria_id 
        WHERE id = :id";

        try {
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
        } catch (PDOException $e) {
            echo "Erro ao salvar: " . $e->getMessage();
        }

        }
        require __DIR__ . "/../View/Produto/editar.php";
    }

    public function criar()
    {
        require __DIR__ . "/../View/Produto/criar.php";
    }

    public function salvar()
    {
        //$id = $this->getID();
        //dd($id['id']);

        $produto = $this->getID();

        if (isset ($produto['id']) && !empty($produto['id'])) {

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
            ':sku' => $_POST['sku'],
            ':nome' => $_POST['nome'],
            ':categoria_id' => $_POST['categoria_id'],
            ':quantidade' => $_POST['quantidade'],
            ':valor' => $_POST['valor'],
            ':unidade_medida_id' => $_POST['unidade_medida_id'],
            'id'=>$_GET['id']
        ]);

        header('Location: /produtos');
    } else {
        $sql = "INSERT INTO produto (sku, nome, categoria_id, quantidade, valor, unidade_medida_id) VALUES (:sku, :nome, :categoria_id, :quantidade, :valor, :unidade_medida_id)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ':sku' => $_POST['sku'],
            ':nome' => $_POST['nome'],
            ':categoria_id' => $_POST['categoria_id'],
            ':quantidade' => $_POST['quantidade'],
            ':valor' => $_POST['valor'],
            ':unidade_medida_id' => $_POST['unidade_medida_id'],
        ]);

        header('Location: /produtos');
    }
    }
    

    public function deletar()
    {
        $sql = "DELETE FROM produto WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id'=>$_GET['id']]);
        header('Location: /produtos');
    }
}

