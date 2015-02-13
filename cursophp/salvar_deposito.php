<?php 
   $saldo = $_GET["saldo"];
   $deposito = $_GET["deposito"];
   $saldo = $saldo+$deposito;
   echo "Saldo final".$saldo;
 ?>