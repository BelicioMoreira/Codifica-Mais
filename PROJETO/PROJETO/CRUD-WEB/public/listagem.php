<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Listagem de produtos</title>
</head>
<body>    
    <main>

        <div class="secao__cabecalho">
            <button class="cabecalho__botao">Novo Item</button>
            <div class="cabecalho__busca">
                <div>Buscar item</div>
                <form action="users.php" method="GET">
                    <input id="search" name="search" type="text" divlaceholder="Buscar item">
                </form>
            </div>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000001</p>
                        <p class="categoria">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Camisa codifica+</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <button class="botao__editar">Editar</button>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div> 

            </div>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000002</p>
                        <p class="categoria">Eletrônicos</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Notebook</p>
                        <p class="quantidade">Quantidade: 45</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <button class="botao__editar">Editar</button>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__item">

                <div class="secao__itens__dados">
                    <div class="id__categoria__sku">
                        <p class="id">#000003</p>
                        <p class="categoria">Escritório</p>
                        <p class="sku">SKU: 123456</p>
                    </div>
                    <div class="nome__quantidade">
                        <p class="nome">Caderno anotação</p>
                        <p class="quantidade">Quantidade: 100</p>
                    </div>
                </div>

                <div class="secao__itens__botoes">
                    <div class="box__botoes">
                        <button class="botao__editar">Editar</button>
                        <button class="botao__deletar">Deletar</button>
                    </div>
                </div>

            </div>
        </div>

    </main>
</body>
</html>