<?php

namespace App\Controller;

class Produtos
{
    public function listar()
    {
        require __DIR__ . "/../View/Produto/listagem.php";

    }

    public function editar()
    {
        require __DIR__ . "/../View/Produto/editar.php";
    }

    public function criar()
    {
        require __DIR__ . "/../View/Produto/formulario.php";
    }
}

