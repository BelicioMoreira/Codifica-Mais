<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Editar produto</title>
</head>
<body>
    
    <main>
        <header>
            <a href="listagem.php" class="cabecalho__botao voltar">
                <i class="fa-solid fa-chevron-left"></i> Voltar
            </a>
            <div class="cabecalho__busca">
                <h1>Editar exemplo</h1>
            </div>            
        </header>

        <div class="conteudo editar">
        <div class="nome">
                <div class="formulario__nome">
                    <label class ="formulario__nome nome__item">
                        Nome do item <span clas="asterisco">*</span>
                    </label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div>

            <div class="sku__unidade">
                <div>
                    <label>SKU <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
                <div>
                    <label>Unidade de Medida <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div> 

            <div class="valor__quantidade">
                <div>
                    <label>Valor <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
                
                <div>
                    <label>Quantidade <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
            </div>          
            
            <div class="categoria__botao">
                <div>
                    <label>Categoria <span clas="asterisco">*</span></label>
                    <input type="text" id="nomeItem" name="nomeItem">
                </div>
                <button href="listagem.php" class="cabecalho__botao">Atualizar
                    <i class="fa-solid fa-rotate"></i>
                </button>
            </div>

        </div>
    </main>

</body>
</html>