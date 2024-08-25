<?php

namespace App;

class Produtos
{

    public function listar()
    { 

        $produtos = $_SESSION['produtos'];    

        foreach ($produtos as $produto) {
            switch ($produto['categoria_id']) {
                case 1:
                    $categoria = "categoria__eletronicos";
                    $categoriaNome ="Eletrônicos";
                    break;
                case 2:
                    $categoria = "categoria__eletrodomesticos";
                    $categoriaNome ="Eletrodomésticos";
                    break;
                case 3:
                    $categoria = "categoria__moveis";
                    $categoriaNome ="Móveis";
                    break;
                case 4:
                    $categoria = "categoria__decoracao";
                    $categoriaNome ="Decoração";
                    break;
                case 5:
                    $categoria = "categoria__vestuario";
                    $categoriaNome ="Vestuário";
                    break;
                case 7:
                    $categoria = "categoria__outros";
                    $categoriaNome ="Outros";
                    break;        
                }  
            ?>
                <div class="secao__itens vestuario">
                    <div class="secao__itens__item">

                        <div class="secao__itens__dados">
                            <div class="id__categoria__sku">
                                <p class="id">#00000<?php echo $produto['id'] ?></p>
                                <p class="categoria <?php echo $categoria;?>"><?php echo $categoriaNome;?></p>
                                <p class="sku"><?php echo $produto['sku'] ?></p>
                            </div>
                            <div class="nome__quantidade">
                                <p class="nome"><?php echo $produto['nome'] ?></p>
                                <p class="quantidade"><?php echo $produto['quantidade'] ?></p>
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
            <?php
        }
    }
}
