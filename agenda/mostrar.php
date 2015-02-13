<?php 
   include("conexao.php");
   $codigo = $_GET["codigo"];
   $sql = "SELECT * FROM tabcontatos";
   $sql.= " WHERE codigo=".$codigo;
   $resultado = mysql_query($sql);
   $contato = mysql_fetch_array($resultado);
 ?>

Dados do registro #<?php echo $codigo; ?>
<br/>
Nome:<?php echo $contato["nome"]; ?><br/>
Telefone:<?php echo $contato["telefone"]; ?><br/>
E-mail:<?php echo $contato["email"]; ?><br/>
Endereço:<?php echo $contato["endereco"]; ?><br/>

<br/>
<a href="listar.php">Voltar para a lista</a>