<?php 
   $nome=$_GET["campo_nome"];
   $saldo=$_GET["campo_saldo"];
   $cpf=$_GET["campo_cpf"] ;

   echo $nome."<br/>";
   echo $saldo."<br/>";
   echo $cpf;
 ?>

<form action="salvar_deposito.php">
   <input type="hidden" name="saldo" 
 value="<?= $saldo ?>">
   <input type="text" name="deposito">
 
</form>
