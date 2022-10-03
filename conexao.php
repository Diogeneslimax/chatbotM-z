<?php

/*Dados de conexão*/

    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "";
    $dbname = "chat-bot";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);