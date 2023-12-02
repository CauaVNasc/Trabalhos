<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '2503';
    $dbname = 'bd-senac';


    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);


    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "conexão efetuada com sucesso";
    }
?>