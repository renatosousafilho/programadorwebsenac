<?php 
   include("conexao.php");
   $sql = "SELECT * FROM tabcontatos";
   $resultado  = mysql_query($sql);
 ?>

 <table border="1">
 	<tr>
 		<th>Nome</th>
 		<th>telefone</th>
 		<th>email</th>
 		<th>Endereço</th>
    <th>Opções</th>
 	</tr>

 	<?php 
            while ($contato=mysql_fetch_array($resultado)){ 
      ?>
            <tr>
               <td><?= $contato["nome"] ?></td>
                <td><?= $contato["telefone"] ?></td>
                <td><?= $contato["endereco"] ?></td>
                <td><?= $contato["email"] ?></td>
                <td>
                    <a href="mostrar.php?codigo=<?= $contato['codigo'] ?>">
                       Visualizar
                    </a>
                    <a href="editar.php?codigo=<?=$contato['codigo'] ?>">
                       Editar
                    </a>
                    <a href="remover.php?codigo=<?= $contato['codigo'] ?>">
                       Remover
                    </a>
                </td>
            </tr>
      <?php 
            } 
      ?>
 </table>

 <a href="cadastrar.php">Cadastrar novo contato</a>