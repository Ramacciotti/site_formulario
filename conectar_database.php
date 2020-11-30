<?php

    // CONECTAR À DATABASE -----------------------------------------------------------------------------------------------------

        // DADOS DA DATABASE ONLINE
        $SERVIDOR_VIRTUAL = "localhost";
        $USUARIO_MYSQL = "id15307450_ramacciotti";
        $SENHA_MYSQL = "GLaDOS520@@@";
        $NOME_DATABASE = "id15307450_database_ramacciotti";
        $CONEXAO = new mysqli($SERVIDOR_VIRTUAL,$USUARIO_MYSQL,$SENHA_MYSQL,$NOME_DATABASE);

    // FALHA NA CONEXÃO -----------------------------------------------------------------------------------------------------

        // SE NÃO CONSEGUIR CONECTAR, MOSTRAR MENSAGEM...
        if($CONEXAO->connect_error){

            echo "Falha na conexão: (".$CONEXAO->connect_error.") ".$CONEXAO->connect_error;
        }

?>