<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Cadastro de produtos</title>
</head>
<body>
    
    <main>
        <header>
            <a href="listagem.php" class="cabecalho__botao voltar">
                <i class="fa-solid fa-chevron-left"></i> Voltar
            </a>
            <div class="cabecalho__busca">
                <h1>Novo Item</h1>
            </div>            
        </header>

        <div class="conteudo formulario">

            <div class="nome__formulario">
                <div class="caixa__nome">
                    <label class ="nome__formulario__texto">
                        Nome do item <span clas="asterisco">*</span>
                    </label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div>

            <div class="sku__unidade__formulario">
                <div class="sku__formulario">
                    <label>SKU <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>

                <div class="unidade__formulario">
                    <label>Unidade de Medida <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div> 

            <div class="valor__quantidade__formulario">
                <div class="valor__formulario">
                    <label>Valor <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
                
                <div class ="quantidade__formulario">
                    <label>Quantidade <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div>          
            
            <div class="categoria__ebotao__formulario">
                <div class="categoria__formulario">
                    <label>Categoria <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>

                <button class="cabecalho__botao">Criar item
                    <i class="fa-solid fa-check"></i>
                </button>
            </div>

        </div>
    </main>

</body>
</html>