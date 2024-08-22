<?php

namespace App;

class Produtos
{

    public function listar()
    {
        $produtos = $_SESSION['produtos'];     

        foreach ($produtos as $produto) {
            echo $produto['nome'] . PHP_EOL;
        }

   //   return $_SESSION['produtos'];   
    }

    

}