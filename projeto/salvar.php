<?php 
    include "conexao.php";
    /*
     se existir o parametro nome,
     ele será exibido
    */
    if (isset($_REQUEST['nome'])) {
       echo "O projeto ".$_REQUEST["nome"] ." foi cadastrado com sucesso!";
       // criar o comando SQL
       $sql = "INSERT INTO tab_projetos";
       $sql .= " (nome,autor,descricao)";
       $sql .= " VALUES ('".$_REQUEST["nome"]."','".$_REQUEST["autor"]."','".$_REQUEST["descricao"]."')";
       // executar comando
       mysql_query($sql) or die("Erro ao conectar ao banco");

    } 
?>