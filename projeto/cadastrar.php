<!DOCTYPE html>
<html>
<head>
	<title>Novo projeto</title>
	<meta charset="utf-8" />
	<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
	   $().ready(function(){
	   	  $("#form").submit(function(e){
	   	  	e.preventDefault();
	   	  	$("#mensagem").html("Cadastrado com sucesso");
	   	  	var action = $("#form").attr("action");
	   	  	var params = $("#form").serialize();
	   	  	$.ajax(action, {
	   	  		data: params,
	   	  		success: function(resposta){
	   	  			$("#mensagem").html(resposta);
	   	  		}
	   	  	});
	   	  });
	   });
	</script>
</head>
<body>
	<form action="salvar.php" method="POST" id="form">
    	Nome: <input type="text" name="nome" id="nome">
    	<br/>
    	Autor: <input type="text" name="autor" id="autor">
    	<br/>
    	Descrição: 
    	<textarea name="descricao" id="descricao">
    	</textarea>
    	<input  type="submit" value="Salvar">
    </form>
    <p id="mensagem"></p>
    
</body>
</html>