<?php 
   include("conexao.php");
   $nome = $_GET["nome"];
   $endereco = $_GET["endereco"];
   $telefone = $_GET["telefone"];
   $email = $_GET["email"];

   $sql="INSERT INTO tabcontatos";
   $sql.=" (nome, endereco,telefone,email)";
   $sql.=" VALUES('$nome','$endereco','$telefone','$email')";

   mysql_query($sql) or die(mysql_error());
   header("Location: listar.php");
 ?>