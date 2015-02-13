<?php 
     include "conexao.php";
     $sql = "SELECT * FROM tablicros";
     $resultado = mysql_query($sql) or die(mysql_error());
 ?>

<table border="1">
	<tr>
		<th>Titulo</th>
		<th>Autor</th>
		<th>Editora</th>
	</tr>
	<?php 
	     while($livro=mysql_fetch_array($resultado)){ 
	?>
		<tr>
			<td><?= $livro["titulo"] ?></td>
			<td><?= $livro["autor"] ?></td>
			<td><?= $livro["editora"] ?></td>
			<td>
		      <a href="editar.php?codigo=<?=$livro['codigo'] ?>">
		        Editar
		      </a>
		      <a href="remover.php?codigo=<?= $livro['codigo'] ?>">		                ]
		         Remover
		      </a>
			</td>
		</tr>
	<?php	
	     } // fim do while 
	 ?>
</table>

<a href="cadastrar.php">Cadastrar novo livro</a>