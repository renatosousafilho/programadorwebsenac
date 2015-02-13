<?php 
	// fazer a conexao com o banco
    include "conexao.php";

    //recebendo o valor da chave primaria
    $codigo = $_GET["codigo"];

    /*
    Pesquisa o registro com essa chave no
     banco usando o comando SELECT FROM
     */

     $sql = "SELECT * FROM tablicros";
     $sql .= " WHERE codigo=".$codigo;

     
     // executar o comando SQL
     $resultado = mysql_query($sql);

     //transformar o resultado em uma Array
     $livro = mysql_fetch_array($resultado);
 ?>

<h1><?php echo $livro["titulo"]; ?></h1>
<p>Autor: <?php echo $livro["autor"]; ?></p>
<p>Editora: <?php echo $livro["editora"] ?></p>
