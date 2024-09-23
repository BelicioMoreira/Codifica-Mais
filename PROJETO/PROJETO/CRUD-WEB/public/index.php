<?php

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
    return $controlador->deletar();
}


