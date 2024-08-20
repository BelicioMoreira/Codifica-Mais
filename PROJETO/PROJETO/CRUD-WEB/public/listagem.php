<?php
session_start();

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

        <div class="secao__itens vestuario">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000001</p>
                        <p class="categoria categoria__vestuario">Vestuário</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Camisa codifica+</p>
                        <p class="quantidade">Quantidade: 100</p>
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

        <div class="secao__itens eletronicos">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000002</p>
                        <p class="categoria categoria__eletronicos">Eletrônicos</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Notebook</p>
                        <p class="quantidade">Quantidade: 45</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <a href="editar.php" class="botao__editar">Editar</a>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="secao__itens outros">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000003</p>
                        <p class="categoria categoria__outros">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Caderno anotação</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <a href="editar.php" class="botao__editar">Editar</a>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="secao__itens eletrodomesticos">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000003</p>
                        <p class="categoria categoria__eletrodomesticos">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Caderno anotação</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <a href="editar.php" class="botao__editar">Editar</a>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="secao__itens decoracao">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000003</p>
                        <p class="categoria categoria__decoracao">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Caderno anotação</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <a href="editar.php" class="botao__editar">Editar</a>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="secao__itens moveis">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000003</p>
                        <p class="categoria categoria__moveis">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Caderno anotação</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <a href="editar.php" class="botao__editar">Editar</a>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    
    </main>
</body>
</html>