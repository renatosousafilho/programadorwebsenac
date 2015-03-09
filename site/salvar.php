<?php
   include "conexao.php";
   $titulo = $_REQUEST["titulo"];
   $texto = $_REQUEST["texto"];

   $sql = "INSERT INTO tabnoticias (titulo,texto) VALUES ('$titulo','$texto')";
   $resultado = mysql_query($sql);
   echo "Noticia cadastrada com sucesso";

   // header("Location: listar.php");
?>
