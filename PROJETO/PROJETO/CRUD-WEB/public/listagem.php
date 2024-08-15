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

        <div class="secao__busca">
            <a href="#">Novo Item</a>
            <p>Bucar item</p>
            <form action="users.php" method="GET">
            <input id="search" name="search" type="text" placeholder="Type here">
            <input id="submit" type="submit" value="Search">
            </form>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__iten">

                <div class="secao__itens__dados">
                    <ul class="id__nome">
                        <li>#000001</li>
                        <li>Camisa codifica+</li>
                    </ul>
                    <span class="categoria">Vestuário</span>
                    <ul class="SKU__quantidade">
                        <li>SKU: 123456</li>
                        <li>Quantidade: 100</li>
                    </ul>
                </div>

                <div class="secao__itens__botoes">
                    <ul class="box__botoes">
                        <li>
                            <a href="#">Editar</a>
                        </li>
                        <li>
                            <a href="#">Deletar</a>
                        </li>
                    </ul>
                </div>                
            </div>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__iten">

                <div class="secao__itens__dados">
                    <ul class="id__nome">
                        <li>#000002</li>
                        <li>Notebook</li>
                    </ul>
                    <span class="categoria">Eletrônicos</span>
                    <ul class="SKU__quantidade">
                        <li>SKU: 123456</li>
                        <li>Quantidade: 45</li>
                    </ul>
                </div>

                <div class="secao__itens__botoes">
                    <ul class="box__botoes">
                        <li>
                            <a href="#">Editar</a>
                        </li>
                        <li>
                            <a href="#">Deletar</a>
                        </li>
                    </ul>
                </div>                
            </div>
        </div>

        <div class="secao__itens">
            <div class="secao__itens__iten">

                <div class="secao__itens__dados">
                    <ul class="id__nome">
                        <li>#000003</li>
                        <li>Cardeno anotação</li>
                    </ul>
                    <span class="categoria">Escritório</span>
                    <ul class="SKU__quantidade">
                        <li>SKU: 123456</li>
                        <li>Quantidade: 100</li>
                    </ul>
                </div>

                <div class="secao__itens__botoes">
                    <ul class="box__botoes">
                        <li>
                            <a href="#">Editar</a>
                        </li>
                        <li>
                            <a href="#">Deletar</a>
                        </li>
                    </ul>
                </div>                
            </div>
        </div>

    </main>
</body>
</html>