<?php 
    include "conexao.php";
    //recebe os dados
     $titulo=$_GET["titulo"];
     $autor=$_GET["autor"];
     $editora=$_GET["editora"];

     //Cria o comando SQL para inserir no banco
     $sql = "INSERT INTO tablicros";
     $sql.=" (titulo,autor,editora)";
     $sql.=" VALUES('$titulo','$autor','$editora')";
     

     // executa a SQL
     mysql_query($sql);
     header("Location: listar.php");
 ?>