<?php
   include "conexao.php";
   $codigo = $_GET["codigo"];
   
   $sql = "SELECT * FROM tabnoticias";
   $sql .= " WHERE codigo=".$codigo;

   $resultado = mysql_query($sql);
   $noticia = mysql_fetch_array($resultado);
?>
<form action="atualizar.php?codigo=<?= $codigo ?>" method="POST">
   Título: <input type="text" name="titulo" value="<?= $noticia['titulo'] ?>"/><br/>
   Texto: <input type="text" name="texto" value="<?= $noticia['texto'] ?>"/><br/>
   <input type="submit" value="Salvar"/>
</form>
