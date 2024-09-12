<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Listagem de produtos</title>
</head>
<body>    

    <main>
        <header>
            <a href="/produtos/criar" class="cabecalho__botao">Novo Item
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

        <?php if (empty($_SESSION['produtos'])) {?>
        <div>
            <p>Nenhum Produto Encontrado</p>
        </div>            
            <?php } else { ?>
                <?php foreach ($_SESSION['produtos'] as $produto): ?>
                    <?php
                            switch ($produto['categoria_id']) {
                                case 1:
                                    $categoria = "categoria__eletronicos";
                                    $categoriaNome = "Eletrônicos";
                                    break;
                                case 2:
                                    $categoria = "categoria__eletrodomesticos";
                                    $categoriaNome = "Eletrodomésticos";
                                    break;
                                case 3:
                                    $categoria = "categoria__moveis";
                                    $categoriaNome = "Móveis";
                                    break;
                                case 4:
                                    $categoria = "categoria__decoracao";
                                    $categoriaNome = "Decoração";
                                    break;
                                case 5:
                                    $categoria = "categoria__vestuario";
                                    $categoriaNome = "Vestuário";
                                    break;
                                case 7:
                                    $categoria = "categoria__outros";
                                    $categoriaNome = "Outros";
                                    break;
                                default:
                                    $categoria = "categoria__outros"; // Categoria padrão
                                    $categoriaNome = "Outros";
                            }
                    ?>

                    <div class="secao__itens vestuario;">
                    <div class="secao__itens__item">

                        <div class="secao__itens__dados">
                            <div class="id__categoria__sku">
                                <p class="id">#00000<?= $produto['id'] ;?></p>
                                <p class="categoria <?= $categoria;?>"><?= $categoriaNome; ?></p>
                                <p class="sku"><?= $produto['sku'];?></p>
                            </div>
                            <div class="nome__quantidade">
                                <p class="nome"><?= $produto['nome'];?></p>
                                <p class="quantidade"><?= $produto['quantidade'];?></p>
                            </div>
                        </div>

                        <div class="secao__itens__botoes">
                            <div class="box__botoes">
                                <a href="/produtos/editar?id=<?= $id?>" class="botao__editar">Editar
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <button class="botao__deletar" 
                                    href="/produtos/deletar?id=<?= $id ?>" 
                                    onclick="return confirm('Deseja deletar o registro?')">Deletar   
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div> 

                    </div>
                </div>
            <?php endforeach ?>
        <?php }?>

        </div>    
    </main>
    
</body>
</html>
