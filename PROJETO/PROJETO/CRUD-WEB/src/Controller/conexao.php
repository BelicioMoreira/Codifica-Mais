<?php
    $server = "localhost";
    $user = "root";
    $pass = "123abc";
    $bd = "produtos";

    if (mysqli_connect($server, $user, $pass, $bd)) {
        echo "Conectado";
    } else
        echo "Error";