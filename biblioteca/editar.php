<?php 
           include "conexao.php";
           $codigo  =$_GET["codigo"];
           
            $sql = "SELECT * FROM tablicros";
            $sql.= " WHERE codigo=".$codigo;
           
            $resultado = mysql_query($sql);
            $livro=mysql_fetch_array($resultado);

 ?>

<form action="atualizar.php?codigo=<?= $livro['codigo'] ?>" method="POST">
	Titulo: 
	<input type="text" name="titulo"
	 value="<?= $livro['titulo'] ?>"> <br/>
	Autor: 
	<input type="text" name="autor"
	value="<?= $livro['autor'] ?>"><br/>
	Editora: 
	<input type="text" name="editora" 
	value="<?= $livro['editora'] ?>"><br/>
	<input type="submit" value="Salvar">	
</form>