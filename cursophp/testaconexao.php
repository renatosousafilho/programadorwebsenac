<?php 
    $usuario="root";
    $senha="root";
    $servidor="localhost";

    $conexao = mysql_connect($servidor,$usuario,$senha) or die("Erro ao conectar ao banco!".mysql_error());
    
    echo "Conectado com sucesso";
  
    $sql = "CREATE DATABASE empresa";

    mysql_query($sql) ;
    mysql_error();
    $sql2 = "CREATE TABLE tabcliente(";
    $sql2 .="nome VARCHAR(255),";
    $sql2 .="telefone VARCHAR(255)," ;
    $sql2 .="endereco VARCHAR(255),";
    $sql2 .="email VARCHAR(255)  )";

   echo $sql2;
   mysql_select_db("empresa");

   mysql_query($sql2);
   mysql_error();

 ?>