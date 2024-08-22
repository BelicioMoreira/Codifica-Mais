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
                        Nome do item <span class="asterisco">*</span>
                    </label>
                    <div><input type="text" id="nomeItem" name="nomeItem"></div>
                </div>
            </div>

            <div class="sku__unidade__formulario">
                <div class="sku__formulario">
                    <label>SKU <span class="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>

                <div class="unidade__formulario">
                    <label>Unidade de Medida <span class="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div> 

            <div class="valor__quantidade__formulario">
                <div class="valor__formulario">
                    <label>Valor <span class="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
                
                <div class ="quantidade__formulario">
                    <label>Quantidade <span class="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div>          
            
            <div class="categoria__ebotao__formulario">
                <div class="categoria__formulario">
                    <label>Categoria <span class="asterisco">*</span></label>
                    <select id="comp">
                        <option value="eletrodomisticos">Eletrodomésticos</option>
                        <option value="moveis">Móveis</option>
                        <option value="decoracao">Decoração</option>
                        <option value="vestuario">Vestuário</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <button class="botao__atualizar">Atualizar
                    <i class="fa-solid fa-rotate"></i>
                </button>
            </div>
            <p class="texto__inferior">Os campos marcadoscampos marcados com asterisco (<span class="asterisco">*</span>) são de preenchimento obrigatório</p>
        </div>
    </main>

</body>
</html>