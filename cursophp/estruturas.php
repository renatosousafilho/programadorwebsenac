<?php
  $idade = $_GET["idade"];
  echo "Valor da idade:".$idade."<br/>";
  if ($idade>=18) {
  	echo "Maior de idade"; 
  } else {
  	echo "Menor de idade";  
  } 
?>

<form action="estruturas.php">
	<input type="number" name="idade" />
	<input type="submit" />
</form>