<?php require_once("inc/acesso-restrito.php"); ?>

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
				<h2>Terminar Sessão</h2>
				<?php 
					session_destroy();
				?>
				<p>Sessão encerrada!</p>
				<a href='index.php'>Página inicial</a>
			</article>
		</section>
		
		<!-- rodapé -->
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>