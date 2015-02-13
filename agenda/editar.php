<?php 
    // fazer a conexao com o banco
    include "conexao.php";

    //recebendo o valor da chave primaria
    $codigo = $_GET["codigo"];

    /*
    Pesquisa o registro com essa chave no
     banco usando o comando SELECT FROM
     */

     $sql = "SELECT * FROM tabcontatos";
     $sql .= " WHERE codigo=".$codigo;

     // executar o comando SQL
     $resultado = mysql_query($sql);

     //transformar o resultado em uma Array
     $contato = mysql_fetch_array($resultado);
   
 ?>

<h1><?= $contato["nome"] ?></h1>
<p><b>Telefone:</b> <?= $contato["telefone"] ?></p>
<p><b>E-mail:</b> <?= $contato["email"]  ?></p>
<p><b>Endereço:</b> <?= $contato["endereco"] ?></p>


<form action="atualizar.php" method="POST">
 <input type="text" 
 value="<?= $contato['nome'] ?>">
 <br/>
 <input type="email" value="<?= $contato['email'] ?>">
 <br/>
 <input type="text" value="<?= $contato['telefone'] ?>">
 <br/>
 <input type="text" value="<?= $contato['endereco'] ?> ">
  <br/>
  <input type="submit" value="Alterar">

</form>

