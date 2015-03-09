<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		$("#form").submit(function (e) {
			e.preventDefault();
			$.ajax({
				url: "salvar.php",
				method: "POST",
				data: $(this).serialize(),
				success:function(resposta){
					$("#mensagem").html(resposta);
				}

			});
		})
	});
	</script>
</head>
<body>


	<form action="salvar.php" method="POST" id="form">
	   Título: <input type="text" name="titulo" /><br/>
	   Texto: <input type="text" name="texto" /><br/>
	   <input type="submit" value="Salvar"/>
	</form>

	<div id="mensagem"></div>
</body>
</html>
