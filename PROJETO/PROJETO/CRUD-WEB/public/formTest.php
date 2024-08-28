<?php
session_start();

$produtos = $_SESSION['produtos'];

var_dump($produtos);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['produtos'] = [
        [
            'id' => $id =+ 1,
            'nome' => $nome = htmlspecialchars($_POST["nome"]),
            'sku' => $sku = htmlspecialchars($_POST["sku"]),
            'unidade_medida_id' => $unidadeMedida = htmlspecialchars($_POST["unidade_medida_id"]),
            'valor' => $valor = htmlspecialchars($_POST["valor"]),
            'quantidade' => $quantidade = htmlspecialchars($_POST["quantidade"]),
            'categoria_id' => $categoria = htmlspecialchars($_POST["categoria_id"])
        ]
        ];

    if (empty($name)) {
         exit();
         header("Location: ../index.php");
     }

     header("Location:../index.php");
} else {
     header("Location:../index.php");
}

var_dump($_SESSION['produtos']);
