<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript">
	$("#form").submit(function(e) {
		e.preventDefault();
		$.ajax($(this).attr("action"){
			data: $(this).serialize();
			success: function(data){
				$("#pagina").html(data);
			}
		})
	})

</script>

<?php 
   include "conexao.php";
   echo ($_SERVER["REQUEST_TIME"]);
   $sql = "SELECT * FROM tab_projetos";
   $resultado = mysql_query($sql);
   if (isset($_REQUEST["nome"])){
   	  $nome = $_REQUEST["nome"];
   	  $sql.=" WHERE nome LIKE '%".$nome."%'";
   	  $sql.=" OR autor LIKE '%".$nome."%'";
   	  $sql.=" OR descricao LIKE '%".$nome."%'";
   	  $resultado = mysql_query($sql);
   }
   $quantidade = mysql_num_rows($resultado);
?>

<p>
	<?php if ($quantidade==0){ 
		echo "Nenhum resultado para a pesquisa";
	} else {
		echo $quantidade." resultado(s) encontrado(s)";
	}
	?>	
</p>

<form id="form" action="listar.php" method="POST">
	Pesquisar por nome: 
	<input type="text" name="nome">
	<input type="submit" value="Pesquisar">
</form>
<ul>
	<?php
	while($p=mysql_fetch_array($resultado)){
    ?>
    	<h3>Nome: <?= $p["nome"] ?></h3>
    	<p><?= $p["descricao"] ?></p>
    	<em>Por: <?= $p["autor"]  ?></em>
    	<hr/>
	<?php 
		} // fim do bloco while
	?>
</ul>

<a href="cadastrar.php">Novo projeto</a>

