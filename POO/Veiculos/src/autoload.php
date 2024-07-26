<?php

namespace POO\Veiculo\src;

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Seu\\NameSpace', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= ".php";

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});