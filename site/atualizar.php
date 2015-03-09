<?php
   include "conexao.php";
   $codigo = $_GET["codigo"];
   $titulo = $_POST["titulo"];
   $texto = $_POST["texto"];

   $sql = "UPDATE tabnoticias SET ";
   $sql .= "titulo='$titulo',";
   $sql .= "texto='$texto'";
   $sql .= " WHERE codigo=".$codigo;
   $resultado = mysql_query($sql);

   header("Location: listar.php");
?>
