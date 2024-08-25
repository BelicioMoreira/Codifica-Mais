<?php
session_start();

require __DIR__.'/../vendor/autoload.php';

use App\Produtos;

$controlador = new Produtos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Listagem de produtos</title>
</head>
<body>    
    <main>

        <header>
            <a href="formulario.php" class="cabecalho__botao">Novo Item
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>

            <div class="cabecalho__busca">
                <form action="" class="barra__busca">
                    <input type="text" placeholder="Buscar item" name="q">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>            
        </header>

        <div class="conteudo listagem">

            <?php 
                $lista = $controlador->listar(); 
            ?>

        </div>
    
    </main>
</body>
</html>