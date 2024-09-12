<?php
session_start();

require __DIR__.'/../vendor/autoload.php';

use App\Controller\Produtos;

$controlador = new Produtos();
$caminho = rtrim($_SERVER['PATH_INFO'], '/');

if ($caminho == '/produtos/criar') {
    return $controlador->criar();
}
if ($caminho == '/produtos/editar') {
    return $controlador->editar();
}
if ($caminho == '/produtos') {
    return $controlador->listar();
}
if ($caminho == '/produtos/salvar') {
    return $controlador->salvar();
}
if ($caminho == '/produtos/deletar') {
    return $produto->deletar();
}


echo "Página não encontrada :(";

$_SESSION['produtos'] = [
    [
        'id' => 1,
        'nome' => 'Smartphone',
        'sku' => '123456',
        'unidade_medida_id' => '1',
        'valor' => 1500.00,
        'quantidade' => 10,
        'categoria_id' => '1',
    ],
    [
        'id' => 2,
        'nome' => 'Geladeira',
        'sku' => '123457',
        'unidade_medida_id' => '2',
        'valor' => 2500.00,
        'quantidade' => 5,
        'categoria_id' => '2',
    ],
];

// Define o array de categorias, unidades de medida e produtos
$_SESSION['categorias'] = [
    '1' => 'Eletrônicos',
    '2' => 'Eletrodomésticos',
    '3' => 'Móveis',
    '4' => 'Decoração',
    '5' => 'Vestuário',
    '7' => 'Outros'
];

$_SESSION['unidades_medidas'] = [
    '1' => 'Un',
    '2' => 'Kg',
    '3' => 'g',
    '4' => 'L',
    '5' => 'mm',
    '6' => 'cm',
    '7' => 'm',
    '8' => 'm²',
];



// Redireciona para a página de listagem
header('Location: /produtos');
