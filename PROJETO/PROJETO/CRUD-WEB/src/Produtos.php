<?php

namespace App;

class Produtos
{

    public function listar()
    { 

        $produtos = $_SESSION['produtos'];    

        foreach ($produtos as $produto) {
            ?>
                <div class="secao__itens vestuario">
                    <div class="secao__itens__item">

                        <div class="secao__itens__dados">
                            <div class="id__categoria__sku">
                                <p class="id">#00000<?php echo $produto['id'] ?></p>
                                <p class="categoria categoria__vestuario"><?php echo $produto['categoria_id'] ?></p>
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