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

        <?php if (empty($_SESSION['produtos'])) {?>
        <div>
            <p>Nenhum Produto Encontrado</p>
        </div>
           
            <?php } else { ?>
                <?php foreach ($_SESSION['produtos'] as $produto) {?>
                    <div class="secao__itens vestuario">
                    <div class="secao__itens__item">

                        <div class="secao__itens__dados">
                            <div class="id__categoria__sku">
                                <p class="id">#00000<?php echo $produto['id'];?></p>
                                <p class="categoria <?php echo $categoria;?>"><?php echo $categoriaNome;?></p>
                                <p class="sku"><?php echo $produto['sku'];?></p>
                            </div>
                            <div class="nome__quantidade">
                                <p class="nome"><?php echo $produto['nome'];?></p>
                                <p class="quantidade"><?php echo $produto['quantidade'];?></p>
                            </div>
                        </div>

                        <div class="secao__itens__botoes">
                            <div class="box__botoes">
                                <a href="editar.php" class="botao__editar">Editar
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <button class="botao__deletar">Deletar
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div> 

                    </div>
                </div>
            <?php }?>
        <?php }?>

        </div>
    
    </main>
</body>
</html>