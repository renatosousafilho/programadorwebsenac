<?php 
   include "conexao.php";

   $codigo = $_GET["codigo"];
   $titulo  = $_POST["titulo"];
   $autor = $_POST["autor"];
   $editora= $_POST["editora"];

   $sql = "UPDATE tablicros SET";
   $sql.="    titulo='$titulo',  ";
   $sql.="    autor='$autor',  ";
   $sql.="    editora='$editora'   ";
   $sql.="    WHERE codigo=".$codigo;


   mysql_query($sql);
   header("Location: listar.php");

 ?>

 