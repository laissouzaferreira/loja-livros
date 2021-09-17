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
				
				<h2>Gerir Livros</h2>
				<?php 
					
					require_once("inc/basedados.php");
					
					//executar consulta e guardar registos devolvidos
					$listaRegistos =
						mysqli_query($ligacaoBD, "SELECT * FROM bd_livors ORDER BY id DESC");

					while($linha = mysqli_fetch_assoc($listaRegistos)){
						echo "<h3 style='color: green;'>".$linha["nome"].
						"</h3>";
						echo "<img src='".$linha["foto"]."' alt=''>";
						
						echo "<p><a onclick=\"return confirm('Tem certeza?')\" href='eliminar.php?livro={$linha['id']}' target='_blank'>Eliminar</a></p>";
						echo "<hr>";
					}
					
				?>
				

			</article>
		</section>
		
	
		<?php require_once("inc/rodape.php"); ?>
	</body>
</html>