<!doctype html>
<html lang="pt-PT">
	<head>
		<meta charset="utf-8">
		<title>Livraria Ler Bem</title>
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<!-- cabeçalho -->
		<?php require_once("inc/cabecalho.php"); ?>
		
		<section>
			<!-- menu -->
			<?php require_once("inc/menu.php"); ?>
			
			<!-- conteúdo específico de cada página -->
			<article>
				<!-- conteúdo específico de cada página virá aqui dentro-->
				<h2>Home</h2>
				<form action="processa-pesquisa.php" method="post"> 
					<label for="termo">Pesquisar:</label>
					<input type="text" id="termo" name="termo" required>
					<input type="submit" name="pesquisar" value="Ir">
				</form>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>