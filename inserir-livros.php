<?php require_once("inc/acesso-restrito.php"); ?>

<!doctype html>
<html lang="pt-PT">
	<head>
		<meta charset="utf-8">
		<title>Livraria Ler Bem</title>
		<link href="css/estilos.css" rel="stylesheet">
	</head>
	<body>
	
		<?php require_once("inc/cabecalho.php"); ?>
		
		<section>
			
			<?php require_once("inc/menu.php"); ?>
			
			
			<article>
			
				<h2>Inserir Livros</h2>

				
				<form action='processa-inserir-livros.php'  enctype="multipart/form-data" method="post">
					<p>
						<lable for="nome">Nome do livro: </lable>
						<input type="text" name="nome" id="nome" required>
					</p>
					
					<p>
						<lable for="autor">Autor: </lable>
						<input type="text" name="autor" id="autor" required>
					</p>

					<p>
						<lable for="sinopse">Sinopse: </lable>
						<input type="text" name="sinopse" id="sinopse" required>
					</p>

					<p>
						<label>Foto:</label>
						<input type="file" name="imagem" id="imagem" required >
					</p>

					<input type="submit" name="inserir" value="Criar Livro">
				</form>

			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>