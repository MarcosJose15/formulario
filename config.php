<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'teste';
    $dbName = 'formulario-marcos1';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /* if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    } */
?>