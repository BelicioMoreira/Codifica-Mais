<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Cadastro de produtos</title>
</head>
<body>
    
    <main>
        <header>
            <a href="/produtos" class="cabecalho__botao voltar">
                <i class="fa-solid fa-chevron-left"></i> Voltar
            </a>
            <div class="cabecalho__busca">
                <h1>Novo Item</h1>
            </div>            
        </header>

        <div class="conteudo formulario">

        <form action="/produtos/salvar?id=<?= $produto['id'] ?>" method="POST">
            <div class="nome__formulario">
                <div class="caixa__nome">
                    <label class ="nome__formulario__texto">
                        Nome do item <span class="asterisco">*</span>
                    </label>
                    <div class="formulario__input">
                        <input required type="text" pattern="^[a-zA-Z]+$" id="nome" name="nome" value="<?= $produto['nome'] ?>">
                    </div>
                </div>
            </div>

            <div class="sku__unidade__formulario">
                <div class="sku__formulario">
                    <label>SKU <span class="asterisco">*</span></label>
                    <div class="formulario__input">
                        <input required type="number" id="sku" name="sku" value="<?= $produto['sku'] ?>">
                    </div>
                </div>

                <div class="unidade__formulario">
                    <label>Unidade de Medida <span class="asterisco">*</span></label>
                    <div class="formulario__input">
                        <input required type="text" id="unidade_medida_id" name="unidade_medida_id" value="<?= $produto['nome'] ?>">
                    </div>
                </div>
            </div> 

            <div class="valor__quantidade__formulario">
                <div class="valor__formulario">
                    <label>Valor <span class="asterisco">*</span></label>
                    <div class="formulario__input">
                        <input required type="number" step="0.01" id="valor" name="valor" value="<?= $produto['valor'] ?>">
                    </div>
                </div>
                
                <div class ="quantidade__formulario">
                    <label>Quantidade <span class="asterisco">*</span></label>
                    <div required class="formulario__input">
                        <input required type="number" min="1" id="quantidade" name="quantidade" value="<?= $produto['quantidade'] ?>">
                    </div>
                </div>
            </div>          
            
            <div class="categoria__ebotao__formulario">
                <div class="categoria__formulario">
                    <label>Categoria <span class="asterisco">*</span></label>
                    <div class="formulario__input select">
                        <select required id="categoria_id" name="categoria_id">
                            <option disabled selected>Selecione uma categoria</option>
                            <option value="1">Eletrônicos</option>
                            <option value="2">Eletrodomésticos</option>
                            <option value="3">Móveis</option>
                            <option value="4">Decoração</option>
                            <option value="5">Vestuário</option>
                            <option value="7">Outros</option>
                        </select>
                    </div>
                </div>

                <button name="cadastrar" type="submit" class="botao__criar">Editar item
                    <i class="fa-solid fa-check"></i>
                </button>
            </div>

            <div class="texto__inferior">
                <p>Os campos marcados com asterisco (<span class="asterisco">*</span>) são de preenchimento obrigatório</p>
            </div>
        </form>

        </div>
    </main>

</body>
</html>
