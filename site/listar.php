<?php include "selecionar.php"; ?>

<?php echo mysql_num_rows($resultado)." resultados encontrados"; ?>
<table>
   <tr>
     <th>Título</th>
     <th>Texto</th>
   </tr>
   <?php while ($noticia=mysql_fetch_array($resultado)) { ?>
        <tr>  
            <td><?= $noticia["titulo"] ?></td>
            <td><?= $noticia["texto"] ?></td>
            <td>
                 <a href="editar.php?codigo=<?= $noticia["codigo"] ?>">Editar</a>
                 <a href="editar.php?codigo=<?= $noticia["codigo"] ?>">Remover</a>
            </td>
        </tr>

   <?php } ?>
</table>

<a href="cadastrar.php">Adiconar nova noticia</a>
