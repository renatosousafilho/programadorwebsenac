<?php 
     include "conexao.php";
     $codigo=$_GET["codigo"];

     $sql = "DELETE    FROM  tablic	ros";
     $sql .="     WHERE codigo=".$codigo;

     mysql_query($sql);
     header("Location: listar.php");
 ?>