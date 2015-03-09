<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8" />
	<title>Calcular soma</title>
	<script type="text/javascript">
	function calcularResultado(){
		numero1 = parseInt(
			document
			.getElementById('numero1')
			.value);
		numero2 = parseInt(
			document
			.getElementById('numero2')
			.value);
		resultado = numero1 + numero2;
		document
		.getElementById("resultado")
		.innerHTML=resultado;
	}
	</script>

</head>
<body>
	<?php 
	     // echo $_SERVER["REQUEST_TIME"];
		 //se receber os dados
	     if (isset($_POST["numero1"]) && 
	     	isset($_POST["numero2"])) {
	         $numero1 = $_POST["numero1"];
	         $numero2 = $_POST["numero2"];
	         echo $numero1+$numero2;
	     } else { //senão receber os dados
	     	echo "Dados não enviados";
	     }
	 ?>
   <form action="exemplo07.php" method="POST">
   	  Número1:<input type="number" 
   	  name="numero1" id="numero1" />
   	  Número2:<input type="number" name="numero2" id="numero2" />
   	  <input type="submit" />
   </form>
   <p id="resultado"></p>
   <button onclick="calcularResultado()">
   		Calcular
   </button>
</body>
</html>