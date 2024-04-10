<?php
    $dbHost = 'localhost';
    $dbUsername ='root';
    $dbPassword ='';
    $databaseName='planimetrico-rodolfo';

    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword,$databaseName );


    if ($conexao->connect_error) {
        echo "erro";
    }else{
        echo "Conectado com sucesso!";
    }
?>